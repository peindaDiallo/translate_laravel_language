<?php





return 
[
    'accepted' => "Le :attribute  doit être accepté.",
    'accepted_if' => "Le :attribute  doit être accepté quand :other  vaut :value .",
    'active_url' => "Le :attribute  n'est pas une URL valide.",
    'after' => "Le :attribute  doit être une date après :date.",
    'after_or_equal' => "Le :attribute  doit être une date postérieure ou égale à :date.",
    'alpha' => "Le :attribute  ne doit contenir que des lettres.",
    'alpha_dash' => "Le :attribute  ne doit contenir que des lettres, des chiffres, des tirets et des traits de soulignement.",
    'alpha_num' => "Le :attribute  ne doit contenir que des lettres et des chiffres.",
    'array' => "Le :attribute  doit être un tableau.",
    'before' => "Le :attribute  doit être une date avant :date.",
    'before_or_equal' => "Le :attribute  doit être une date antérieure ou égale à :date.",
    'between' => 
        [
            'array' => "Le :attribute  doit avoir entre :min  et :max  éléments.",
            'file' => "Le :attribute  doit être compris entre :min  et :max  kilo-octets.",
            'numeric' => "Le :attribute  doit être compris entre :min  et :max .",
            'string' => "Le :attribute  doit être compris entre les caractères :min  et :max .",
        ],

    'boolean' => "Le champ :attribute  doit être vrai ou faux.",
    'confirmed' => "La confirmation :attribute  ne correspond pas.",
    'current_password' => "Le mot de passe est incorrect.",
    'date' => "Le :attribute  n'est pas une date valide.",
    'date_equals' => "Le :attribute  doit être une date égale à :date.",
    'date_format' => "Le :attribute  ne correspond pas au format :format.",
    'declined' => "Le :attribute  doit être refusé.",
    'declined_if' => "Le :attribute  doit être décliné quand :other  vaut :value .",
    'different' => "Le :attribute  et le :it doivent être différents.",
    'digits' => "Le :attribute  doit être :chiffres chiffres.",
    'digits_between' => "Le :attribute  doit être compris entre les chiffres :min  et :max .",
    'dimensions' => "Le :attribute  a des dimensions d'image non valides.",
    'distinct' => "Le champ :attribute  a une valeur en double.",
    'email' => "Le :attribute  doit être une adresse e-mail valide.",
    'ends_with' => "Le :attribute  doit se terminer par l'un des éléments suivants : :value s.",
    'enum' => "Le :attribute  sélectionné n'est pas valide.",
    'exists' => "Le :attribute  sélectionné n'est pas valide.",
    'file' => "Le :attribute  doit être un fichier.",
    'filled' => "Le champ :attribute  doit avoir une valeur.",
    'gt' => 
        [
            'array' => "Le :attribute  doit avoir plus de :value  éléments.",
            'file' => "Le :attribute  doit être supérieur à :value  kilo-octets.",
            'numeric' => "Le :attribute  doit être supérieur à :value .",
            'string' => "Le :attribute  doit être supérieur à :value  caractères.",
        ],

    'gte' => 
        [
            'array' => "Le :attribute  doit avoir des éléments :value  ou plus.",
            'file' => "Le :attribute  doit être supérieur ou égal à :value  kilo-octets.",
            'numeric' => "Le :attribute  doit être supérieur ou égal à :value .",
            'string' => "Le :attribute  doit être supérieur ou égal aux caractères :value .",
        ],

    'image' => "Le :attribute  doit être une image.",
    'in' => "Le :attribute  sélectionné n'est pas valide.",
    'in_array' => "Le champ :attribute  n'existe pas dans :other .",
    'integer' => "Le :attribute  doit être un entier.",
    'ip' => "Le :attribute  doit être une adresse IP valide.",
    'ipv4' => "Le :attribute  doit être une adresse IPv4 valide.",
    'ipv6' => "Le :attribute  doit être une adresse IPv6 valide.",
    'json' => "Le :attribute  doit être une chaîne JSON valide.",
    'lt' => 
        [
            'array' => "Le :attribute  doit avoir moins de :value  éléments.",
            'file' => "Le :attribute  doit être inférieur à :value  kilo-octets.",
            'numeric' => "Le :attribute  doit être inférieur à :value .",
            'string' => "Le :attribute  doit être inférieur à :value  caractères.",
        ],

    'lte' => 
        [
            'array' => "Le :attribute  ne doit pas avoir plus de :value  éléments.",
            'file' => "Le :attribute  doit être inférieur ou égal à :value  kilo-octets.",
            'numeric' => "Le :attribute  doit être inférieur ou égal à :value .",
            'string' => "Le :attribute  doit être inférieur ou égal aux caractères :value .",
        ],

    'mac_address' => "Le :attribute  doit être une adresse MAC valide.",
    'max' => 
        [
            'array' => "Le :attribute  ne doit pas avoir plus de :max  éléments.",
            'file' => "Le :attribute  ne doit pas être supérieur à :max  kilo-octets.",
            'numeric' => "Le :attribute  ne doit pas être supérieur à :max .",
            'string' => "Le :attribute  ne doit pas être supérieur à :max  caractères.",
        ],

    'mimes' => "Le :attribute  doit être un fichier de type : :value s.",
    'mimetypes' => "Le :attribute  doit être un fichier de type : :value s.",
    'min' => 
        [
            'array' => "Le :attribute  doit avoir au moins :min  éléments.",
            'file' => "Le :attribute  doit être d'au moins :min  kilo-octets.",
            'numeric' => "Le :attribute  doit être au moins :min .",
            'string' => "Le :attribute  doit comporter au moins :min  caractères.",
        ],

    'multiple_of' => "Le :attribute  doit être un multiple de :value .",
    'not_in' => "Le :attribute  sélectionné n'est pas valide.",
    'not_regex' => "Le format :attribute  n'est pas valide.",
    'numeric' => "Le :attribute  doit être un nombre.",
    'password' => 
        [
            'letters' => "Le :attribute  doit contenir au moins une lettre.",
            'mixed' => "Le :attribute  doit contenir au moins une majuscule et une minuscule.",
            'numbers' => "Le :attribute  doit contenir au moins un chiffre.",
            'symbols' => "Le :attribute  doit contenir au moins un symbole.",
            'uncompromised' => "Le :attribute  donné est apparu dans une fuite de données. Veuillez choisir un autre :attribute .",
        ],

    'present' => "Le champ :attribute  doit être présent.",
    'prohibited' => "Le champ :attribute  est interdit.",
    'prohibited_if' => "Le champ :attribute  est interdit lorsque :other  vaut :value .",
    'prohibited_unless' => "Le champ :attribute  est interdit sauf si :other  est dans :value s.",
    'prohibits' => "Le champ :attribute  interdit la présence de :other .",
    'regex' => "Le format :attribute  n'est pas valide.",
    'required' => "Le champ :attribute  est obligatoire.",
    'required_array_keys' => "Le champ :attribute  doit contenir des entrées pour : :value s.",
    'required_if' => "Le champ :attribute  est obligatoire lorsque :other  vaut :value .",
    'required_unless' => "Le champ :attribute  est obligatoire sauf si :other  est dans :value s.",
    'required_with' => "Le champ :attribute  est obligatoire lorsque :value s est présent.",
    'required_with_all' => "Le champ :attribute  est obligatoire lorsque :value s est présent.",
    'required_without' => "Le champ :attribute  est obligatoire lorsque :value s n'est pas présent.",
    'required_without_all' => "Le champ :attribute  est obligatoire lorsqu'aucun des :value s n'est présent.",
    'same' => "Le :attribute  et le :other  doivent correspondre.",
    'size' => 
        [
            'array' => "Le :attribute  doit contenir des éléments :size .",
            'file' => "Le :attribute  doit être de :size  kilo-octets.",
            'numeric' => "Le :attribute  doit être :size .",
            'string' => "Le :attribute  doit être des caractères :size .",
        ],

    'starts_with' => "Le :attribute  doit commencer par l'un des éléments suivants : :value s.",
    'string' => "Le :attribute  doit être une chaîne.",
    'timezone' => "Le :attribute  doit être un fuseau horaire valide.",
    'unique' => "Le :attribute  a déjà été pris.",
    'uploaded' => "Le :attribute  n'a pas pu être téléchargé.",
    'url' => "Le :attribute  doit être une URL valide.",
    'uuid' => "Le :attribute  doit être un UUID valide.",
    'custom' => 
        [
            'attribute-name' => 
                [
                    'rule-name' => "message personnalisé",
                ],

        ],

    'attributes' => 
        [
        ],

];