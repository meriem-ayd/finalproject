<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Dci extends Model
{
    protected $table = 'dci';
    protected $fillable = [
        'IDdci', 'dci', 'forme', 'dosage',
        'quantite_en_stock', 'prix_unitaire',
        'Montant', 'date_peremption', 'numero_lot', 'famille_id', 'nomCommercial',
    ];
    public function famille()
    {
        return $this->belongsTo(Famille::class);
    }
    public function nomCommercial()
    {
        return $this->hasMany(NomCommercial::class, 'id_dci');
    }

    public function lignesBCF()
    {
        return $this->belongsTo(LigneBonCommandeFournisseur::class, 'IDdci');
    }
    public function ligneBonReceptions()
    {
        return $this->hasMany(LigneBonReception::class, 'id_dci');
    }
    // public function getIdCommercForLine($id_dci)
    // {
    //     $dci = Dci::findOrFail($id_dci);

    //     // Correction ici pour éviter l'erreur "Call to a member function first() on string"
    //     $nomCommercial = $dci->nomCommercial()->first(); // Utilisation de parentheses () pour appeler la relation

    //     if ($nomCommercial) {
    //         return $nomCommercial->id_commerc;
    //     } else {
    //         return 1; // Valeur par défaut ou gestion d'erreur selon votre logique
    //     }
    // }


    // public function quantiteLivreEntreDates($startDate, $endDate)
    // {
    //     if ($this->nomCommercial) {
    //         return $this->nomCommercial
    //             ->flatMap->ligneBonLivraisons
    //             ->whereBetween('created_at', [$startDate, $endDate])
    //             ->sum('quantite_livree');
    //     }
    //     return 0;
    // }

    //

    public function quantiteLivreEntreDates($startDate, $endDate)
    {
        return $this->nomCommercial()
            ->with(['ligneBonLivraisons' => function ($query) use ($startDate, $endDate) {
                $query->whereBetween('created_at', [$startDate, $endDate]);
            }])
            ->get()
            ->pluck('ligneBonLivraisons')
            ->flatten()
            ->sum('quantite_livree');
    }

    public function quantiteRecueEntreDates($startDate, $endDate)
    {
      
        return $this->ligneBonReceptions()
            ->whereBetween('created_at', [$startDate, $endDate])
            ->sum('quantite_recue');
    }
}
