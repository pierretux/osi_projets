<?php
if (!defined('_ECRIRE_INC_VERSION')) return;



function balise_OSIP_LISTE_MEMBRES($p) {
    return calculer_balise_dynamique($p, 'OSIP_LISTE_MEMBRES', array('id_projet', 'valeur'));
}



function balise_OSIP_LISTE_MEMBRES_stat($args, $context_compil) {
    // Séparer les arguments
    $id_projet = isset($args[0]) ? $args[0] : 0;
    $valeur = 1;
    return array($id_projet, $valeur);
}



function balise_OSIP_LISTE_MEMBRES_dyn($id_projet, $valeur) {

    $contexte = array(
        'id_projet' => $id_projet,
        'etat' => $valeur,
        'nb' => 30,
        'titre' => _T('osi_projets:titre_tous_les_auteurs'),
        'sinon' => _T('osi_projets:aucun_auteur'),
    );

    return recuperer_fond('prive/objets/liste/pr_auteurs', $contexte);
}
?>
