<?php
/*
    CLERC Pierre-François
    Création 16/01/2026
    function.inc.php
    fonctions pour le mini projet RPG du BTS SIO
*/

function initPlayer()
{
    // pokeprof 1
    $pkp = array();
    $pkp['name'] = 'Prof d\'info';
    $pkp['lvl'] = 38;
    $pkp['img'] = './img/pokeprof_01.jpg';
    $pkp['hpmax'] = 150;
    $pkp['hp'] = 150;
    $pkp['moves'][0]['name'] = 'Disquette';
    $pkp['moves'][0]['effect']['min'] = 5;
    $pkp['moves'][0]['effect']['max'] = 10;
    $pkp['moves'][0]['pp'] = 20;
    $pkp['moves'][0]['ppmax'] = 20;
    $pkp['moves'][1]['name'] = 'Quest.Matrix';
    $pkp['moves'][1]['effect']['min'] = 8;
    $pkp['moves'][1]['effect']['max'] = 17;
    $pkp['moves'][1]['pp'] = 15;
    $pkp['moves'][1]['ppmax'] = 15;
    $pkp['moves'][2]['name'] = 'Devoir';
    $pkp['moves'][2]['effect']['min'] = 10;
    $pkp['moves'][2]['effect']['max'] = 20;
    $pkp['moves'][2]['pp'] = 10;
    $pkp['moves'][2]['ppmax'] = 10;
    $pkp['moves'][3]['name'] = 'BTS Blanc';
    $pkp['moves'][3]['effect']['min'] = 5;
    $pkp['moves'][3]['effect']['max'] = 50;
    $pkp['moves'][3]['pp'] = 5;
    $pkp['moves'][3]['ppmax'] = 5;
    $_SESSION['player']['pokeprof'][0] = $pkp;
    $pkp = array();
    $pkp['name'] = 'Prof de baballe';
    $pkp['lvl'] = 27;
    $pkp['img'] = './img/pokeprof_02.png';
    $pkp['hpmax'] = 120;
    $pkp['hp'] = 120;
    $pkp['moves'][0]['name'] = 'Balle Jaune';
    $pkp['moves'][0]['effect']['min'] = 4;
    $pkp['moves'][0]['effect']['max'] = 11;
    $pkp['moves'][0]['pp'] = 20;
    $pkp['moves'][0]['ppmax'] = 20;
    $pkp['moves'][1]['name'] = 'Acrosport';
    $pkp['moves'][1]['effect']['min'] = 10;
    $pkp['moves'][1]['effect']['max'] = 15;
    $pkp['moves'][1]['pp'] = 15;
    $pkp['moves'][1]['ppmax'] = 15;
    $pkp['moves'][2]['name'] = 'Baseball';
    $pkp['moves'][2]['effect']['min'] = 18;
    $pkp['moves'][2]['effect']['max'] = 21;
    $pkp['moves'][2]['pp'] = 10;
    $pkp['moves'][2]['ppmax'] = 10;
    $pkp['moves'][3]['name'] = 'Natation';
    $pkp['moves'][3]['effect']['min'] = 20;
    $pkp['moves'][3]['effect']['max'] = 40;
    $pkp['moves'][3]['pp'] = 5;
    $pkp['moves'][3]['ppmax'] = 5;
    $_SESSION['player']['pokeprof'][1] = $pkp;
    // pokeprof 3
    $pkp = array();
    $pkp['name'] = 'Prof de frooonçais';
    $pkp['lvl'] = 45;
    $pkp['img'] = './img/pokeprof_03.png';
    $pkp['hpmax'] = 200;
    $pkp['hp'] = 200;
    $pkp['moves'][0]['name'] = 'Vocabulaire';
    $pkp['moves'][0]['effect']['min'] = 7;
    $pkp['moves'][0]['effect']['max'] = 10;
    $pkp['moves'][0]['pp'] = 20;
    $pkp['moves'][0]['ppmax'] = 20;
    $pkp['moves'][1]['name'] = 'Grammaire';
    $pkp['moves'][1]['effect']['min'] = 13;
    $pkp['moves'][1]['effect']['max'] = 15;
    $pkp['moves'][1]['pp'] = 15;
    $pkp['moves'][1]['ppmax'] = 15;
    $pkp['moves'][2]['name'] = 'Conjugaison';
    $pkp['moves'][2]['effect']['min'] = 17;
    $pkp['moves'][2]['effect']['max'] = 20;
    $pkp['moves'][2]['pp'] = 10;
    $pkp['moves'][2]['ppmax'] = 10;
    $pkp['moves'][3]['name'] = 'Pleïade';
    $pkp['moves'][3]['effect']['min'] = 1;
    $pkp['moves'][3]['effect']['max'] = 60;
    $pkp['moves'][3]['pp'] = 5;
    $pkp['moves'][3]['ppmax'] = 5;
    $_SESSION['player']['pokeprof'][2] = $pkp;
    // pokeprof 4
    $pkp = array();
    $pkp['name'] = 'A.E.D.';
    $pkp['lvl'] = 21;
    $pkp['img'] = './img/pokeprof_04.png';
    $pkp['hpmax'] = 135;
    $pkp['hp'] = 135;
    $pkp['moves'][0]['name'] = 'Hop hop hop';
    $pkp['moves'][0]['effect']['min'] = 6;
    $pkp['moves'][0]['effect']['max'] = 9;
    $pkp['moves'][0]['pp'] = 20;
    $pkp['moves'][0]['ppmax'] = 20;
    $pkp['moves'][1]['name'] = 'Menace';
    $pkp['moves'][1]['effect']['min'] = 10;
    $pkp['moves'][1]['effect']['max'] = 12;
    $pkp['moves'][1]['pp'] = 15;
    $pkp['moves'][1]['ppmax'] = 15;
    $pkp['moves'][2]['name'] = 'Carnet';
    $pkp['moves'][2]['effect']['min'] = 15;
    $pkp['moves'][2]['effect']['max'] = 25;
    $pkp['moves'][2]['pp'] = 10;
    $pkp['moves'][2]['ppmax'] = 10;
    $pkp['moves'][3]['name'] = 'Chez le CPE';
    $pkp['moves'][3]['effect']['min'] = 25;
    $pkp['moves'][3]['effect']['max'] = 35;
    $pkp['moves'][3]['pp'] = 5;
    $pkp['moves'][3]['ppmax'] = 5;
    $_SESSION['player']['pokeprof'][3] = $pkp;
    // Inventaire
    $_SESSION['player']['item'][0]['name'] = 'Potion';
    $_SESSION['player']['item'][0]['effect'] = 25;
    $_SESSION['player']['item'][0]['number'] = 5;
    $_SESSION['player']['item'][1]['name'] = 'Super Potion';
    $_SESSION['player']['item'][1]['effect'] = 50;
    $_SESSION['player']['item'][1]['number'] = 3;
    $_SESSION['player']['item'][2]['name'] = 'Hyper Potion';
    $_SESSION['player']['item'][2]['effect'] = 100;
    $_SESSION['player']['item'][2]['number'] = 1;
    $_SESSION['player']['item'][3]['name'] = 'Potion Max';
    $_SESSION['player']['item'][3]['effect'] = 'max';
    $_SESSION['player']['item'][3]['number'] = 1;
    $_SESSION['player']['pkpId'] = 0;
}

function initEnemy()
{
    // enemy 1
    $pkp = array();
    $pkp['name'] = 'Etudiant';
    $pkp['lvl'] = 18;
    $pkp['img'] = './img/enemy_01.jpg';
    $pkp['hpmax'] = 150;
    $pkp['hp'] = 150;
    $pkp['moves'][0]['name'] = 'Retard';
    $pkp['moves'][0]['effect']['min'] = 8;
    $pkp['moves'][0]['effect']['max'] = 12;
    $pkp['moves'][0]['pp'] = 20;
    $pkp['moves'][0]['ppmax'] = 20;
    $pkp['moves'][1]['name'] = 'Pause Pipi';
    $pkp['moves'][1]['effect']['min'] = 11;
    $pkp['moves'][1]['effect']['max'] = 14;
    $pkp['moves'][1]['pp'] = 15;
    $pkp['moves'][1]['ppmax'] = 15;
    $pkp['moves'][2]['name'] = 'Telephone';
    $pkp['moves'][2]['effect']['min'] = 16;
    $pkp['moves'][2]['effect']['max'] = 18;
    $pkp['moves'][2]['pp'] = 10;
    $pkp['moves'][2]['ppmax'] = 10;
    $pkp['moves'][3]['name'] = 'ChatGPT';
    $pkp['moves'][3]['effect']['min'] = 28;
    $pkp['moves'][3]['effect']['max'] = 38;
    $pkp['moves'][3]['pp'] = 5;
    $pkp['moves'][3]['ppmax'] = 5;
    $_SESSION['enemy']['pokeprof'][0] = $pkp;
    // enemy 2
    $pkp = array();
    $pkp['name'] = 'Lycéenne';
    $pkp['lvl'] = 16;
    $pkp['img'] = '/img/enemy_02.png';
    $pkp['hpmax'] = 130;
    $pkp['hp'] = 130;
    $pkp['moves'][0]['name'] = 'Oublie de Livre';
    $pkp['moves'][0]['effect']['min'] = 6;
    $pkp['moves'][0]['effect']['max'] = 12;
    $pkp['moves'][0]['pp'] = 20;
    $pkp['moves'][0]['ppmax'] = 20;
    $pkp['moves'][1]['name'] = 'Récré';
    $pkp['moves'][1]['effect']['min'] = 10;
    $pkp['moves'][1]['effect']['max'] = 16;
    $pkp['moves'][1]['pp'] = 15;
    $pkp['moves'][1]['ppmax'] = 15;
    $pkp['moves'][2]['name'] = 'Telephone';
    $pkp['moves'][2]['effect']['min'] = 16;
    $pkp['moves'][2]['effect']['max'] = 19;
    $pkp['moves'][2]['pp'] = 10;
    $pkp['moves'][2]['ppmax'] = 10;
    $pkp['moves'][3]['name'] = 'Sortie Scolaire';
    $pkp['moves'][3]['effect']['min'] = 20;
    $pkp['moves'][3]['effect']['max'] = 40;
    $pkp['moves'][3]['pp'] = 5;
    $pkp['moves'][3]['ppmax'] = 5;
    $_SESSION['enemy']['pokeprof'][1] = $pkp;
    // enemy 3
    $pkp = array();
    $pkp['name'] = 'Etudiante';
    $pkp['lvl'] = 19;
    $pkp['img'] = './img/enemy_03.png';
    $pkp['hpmax'] = 165;
    $pkp['hp'] = 165;
    $pkp['moves'][0]['name'] = 'Bavardage';
    $pkp['moves'][0]['effect']['min'] = 7;
    $pkp['moves'][0]['effect']['max'] = 13;
    $pkp['moves'][0]['pp'] = 20;
    $pkp['moves'][0]['ppmax'] = 20;
    $pkp['moves'][1]['name'] = 'P\'ti Dessin';
    $pkp['moves'][1]['effect']['min'] = 12;
    $pkp['moves'][1]['effect']['max'] = 19;
    $pkp['moves'][1]['pp'] = 15;
    $pkp['moves'][1]['ppmax'] = 15;
    $pkp['moves'][2]['name'] = 'Pronote';
    $pkp['moves'][2]['effect']['min'] = 14;
    $pkp['moves'][2]['effect']['max'] = 25;
    $pkp['moves'][2]['pp'] = 10;
    $pkp['moves'][2]['ppmax'] = 10;
    $pkp['moves'][3]['name'] = 'Bonne Question';
    $pkp['moves'][3]['effect']['min'] = 24;
    $pkp['moves'][3]['effect']['max'] = 30;
    $pkp['moves'][3]['pp'] = 5;
    $pkp['moves'][3]['ppmax'] = 5;
    $_SESSION['enemy']['pokeprof'][2] = $pkp;
    // enemy 3
    $pkp = array();
    $pkp['name'] = 'Lycéen';
    $pkp['lvl'] = 15;
    $pkp['img'] = './img/enemy_04.png';
    $pkp['hpmax'] = 130;
    $pkp['hp'] = 130;
    $pkp['moves'][0]['name'] = 'Oh! une mouche';
    $pkp['moves'][0]['effect']['min'] = 6;
    $pkp['moves'][0]['effect']['max'] = 17;
    $pkp['moves'][0]['pp'] = 20;
    $pkp['moves'][0]['ppmax'] = 20;
    $pkp['moves'][1]['name'] = 'P\'ti Somme';
    $pkp['moves'][1]['effect']['min'] = 14;
    $pkp['moves'][1]['effect']['max'] = 16;
    $pkp['moves'][1]['pp'] = 15;
    $pkp['moves'][1]['ppmax'] = 15;
    $pkp['moves'][2]['name'] = 'Chewing Gum';
    $pkp['moves'][2]['effect']['min'] = 15;
    $pkp['moves'][2]['effect']['max'] = 20;
    $pkp['moves'][2]['pp'] = 10;
    $pkp['moves'][2]['ppmax'] = 10;
    $pkp['moves'][3]['name'] = 'Insolence';
    $pkp['moves'][3]['effect']['min'] = 20;
    $pkp['moves'][3]['effect']['max'] = 40;
    $pkp['moves'][3]['pp'] = 5;
    $pkp['moves'][3]['ppmax'] = 5;
    $_SESSION['enemy']['pokeprof'][3] = $pkp;
    $_SESSION['enemy']['pkpId'] = random_int(0, 3);
}

function displayPlayer()
{
    $pkpId = $_SESSION['player']['pkpId'];
    $tmp = '<div class="zone zone3">
                    <img src="'.$_SESSION['player']['pokeprof'][$pkpId]['img'].'">
                </div>
                <div class="zone zone4">
                    <p><strong>'.$_SESSION['player']['pokeprof'][$pkpId]['name'].'</strong><br>
                    Niv. '.$_SESSION['player']['pokeprof'][$pkpId]['lvl'].'</p>
                    <progress value="'.$_SESSION['player']['pokeprof'][$pkpId]['hp'].'" max="'.$_SESSION['player']['pokeprof'][$pkpId]['hpmax'].'"></progress>
                    <p>PV : '.$_SESSION['player']['pokeprof'][$pkpId]['hp'].'/'.$_SESSION['player']['pokeprof'][$pkpId]['hpmax'].'</p>
                </div>';
    return $tmp;
}

function displayEnemy()
{
    $pkpId = $_SESSION['enemy']['pkpId'];
    $tmp = '<div class="zone zone1">
                <p><strong>'.$_SESSION['enemy']['pokeprof'][$pkpId]['name'].'</strong><br>
                Niv. '.$_SESSION['enemy']['pokeprof'][$pkpId]['lvl'].'</p>
                <progress value="'.$_SESSION['enemy']['pokeprof'][$pkpId]['hp'].'" max="'.$_SESSION['enemy']['pokeprof'][$pkpId]['hpmax'].'"></progress>
                <p>PV : '.$_SESSION['enemy']['pokeprof'][$pkpId]['hp'].'/'.$_SESSION['enemy']['pokeprof'][$pkpId]['hpmax'].'</p>
            </div>
            <div class="zone zone2">
                <img src="'.$_SESSION['enemy']['pokeprof'][$pkpId]['img'].'">
            </div>';
    return $tmp;
}

function getBattleMenu($end = false)
{
    $player = '';
    $enemy = 'disabled';
    if($end !== false)
    {
        $player = 'disabled';
        $enemy = '';
    }
        
    $tmp = '<button '.$player.' onclick="window.location.href=\'index.php?action=getMoves\'">ATTAQUE</button>
            <button '.$player.' onclick="window.location.href=\'index.php?action=changePkp\'">POKÉPROF</button>
            <button '.$player.' onclick="window.location.href=\'index.php?action=getItems\'">SAC</button>
            <button '.$enemy.' onclick="window.location.href=\'index.php?action=enemy\'">A L\'ADVERSAIRE</button>';
    return $tmp;
}

function getMovesMenu()
{
    $tmp = '';
    
    foreach($_SESSION['player']['pokeprof'][$_SESSION['player']['pkpId']]['moves'] as $id => $move)
        $tmp .= '<button onclick="window.location.href=\'index.php?action=useMove&moveId='.$id.'\'" '.($move['pp']<=0?'disabled':'').'>'.$move['name'].' '.$move['pp'].'/'.$move['ppmax'].'</button>';
    return $tmp;
}

function getPokeprofMenu($ko = false)
{
    $tmp = '';
    foreach($_SESSION['player']['pokeprof'] as $id => $pkp)
    {
        $tmp .= '<button '.($pkp['hp'] <= 0?'disabled':'onclick="window.location.href=\'index.php?action=selectPkp&pkpId='.$id.($ko !== false?'&ko=1':'').'\'"').' >'.$pkp['name'].'</button>';
    }
    return $tmp;
}

function getItemsMenu()
{
    $tmp = '';
    foreach($_SESSION['player']['item'] as $id => $item)
    {
        $tmp .= '<button '.($item['number'] <= 0?'disabled':'onclick="window.location.href=\'index.php?action=useItem&itemId='.$id.'\'"').'>'.$item['name'].' x'.$item['number'].'</button>';
    }
    return $tmp;
}

function getEndMenu()
{
    $tmp = '<button onclick="window.location.href=\'index.php?action=start\'">REJOUER</button>
            <button disabled>...</button>
            <button disabled>...</button>
            <button disabled>...</button>';
    return $tmp;
}

function main()
{
    // Variables
    $action = 'start';
    $moveId = 0;
    $itemId = 0;
    $pkpId = 0;
    $ko = 0;

    // Variable GET
    if(isset($_GET['action']))
        $action = $_GET['action'];

    if(isset($_GET['moveId']))
        $moveId = $_GET['moveId'];

    if(isset($_GET['itemId']))
        $itemId = $_GET['itemId'];

    if(isset($_GET['pkpId']))
        $pkpId = $_GET['pkpId'];

    if(isset($_GET['ko']))
        $ko = $_GET['ko'];

    // Traitement
    switch($action)
    {
        case 'start':
            // Initialisation Session
            initPlayer();
            initEnemy();
            $battleMenu  = getBattleMenu();
            $message = 'A vous de jouer !';
            break;
        
        case 'getMoves':
            // Attaques
            $battleMenu = getMovesMenu();
            $message = 'Choisissez votre attaque.';
            break;
        
        case 'useMove':
            $enemyId = $_SESSION['enemy']['pkpId'];
            $pkpId = $_SESSION['player']['pkpId'];
            // Utilisation d'une attaques
            $battleMenu = getBattleMenu(true);
            // calcule des degats
            $effect = random_int($_SESSION['player']['pokeprof'][$pkpId]['moves'][$moveId]['effect']['min'], $_SESSION['player']['pokeprof'][$pkpId]['moves'][$moveId]['effect']['max']);
            $_SESSION['enemy']['pokeprof'][$enemyId]['hp'] -= $effect;
            // Diminution des PP de l'attaque
            $_SESSION['player']['pokeprof'][$pkpId]['moves'][$moveId]['pp']--;
            // Generation du message
            $message = $_SESSION['player']['pokeprof'][$pkpId]['name'].' utilise '.$_SESSION['player']['pokeprof'][$pkpId]['moves'][$moveId]['name'];
            $message .= '.<br>'.$_SESSION['enemy']['pokeprof'][$enemyId]['name'].' perd '.$effect.' PV.';
            // Verification Pokeprof KO ?
            if($_SESSION['enemy']['pokeprof'][$enemyId]['hp'] <= 0)
            {
                $_SESSION['enemy']['pokeprof'][$enemyId]['hp'] = 0;
                $message .= '<br>'.$_SESSION['enemy']['pokeprof'][$enemyId]['name'].' est KO.';
                $end = changeEnemy($enemyId);
                if($end)
                {
                    $message .= '<br>L\'adversaire a perdu.';
                    $battleMenu = getEndMenu();
                }
                else
                    $message .= '<br>L\'adversaire appel '.$_SESSION['enemy']['pokeprof'][$_SESSION['enemy']['pkpId']]['name'].' sur le terrain.';
            }
            break;

        case 'enemy':

            // Choix de l'attaque aleatoire pondere
            $totalPP = 0;
            $current = 0;
            $enemyId = $_SESSION['enemy']['pkpId'];
            $pkpId = $_SESSION['player']['pkpId'];
            foreach($_SESSION['enemy']['pokeprof'][$enemyId]['moves'] as $move)
            {
                if ($move['pp'] > 0)
                    $totalPP += $move['pp'];
            }
            if($totalPP === 0)
            {
                // Comportement de secours
                $effect = random_int(1, 5);
                $_SESSION['player']['pokeprof'][$pkpId]['hp'] -= $effect;
                // Generation du message
                $message = $_SESSION['enemy']['pokeprof'][$enemyId]['name'].' est épuisé, il lutte';
                $message .= '.<br>'.$_SESSION['player']['pokeprof'][$pkpId]['name'].' perd '.$effect.' PV.';
                
            }
            else
            {
                $rand = random_int(1, $totalPP);
                foreach($_SESSION['enemy']['pokeprof'][$enemyId]['moves'] as $moveId => $move)
                {
                    if($move['pp'] <= 0)
                    {
                        continue;
                    }
                    $current += $move['pp'];
                    if($rand <= $current)
                    {
                        $selectedIndex = $moveId;
                        break;
                    }
                }
                $effect = random_int($_SESSION['enemy']['pokeprof'][$enemyId]['moves'][$selectedIndex]['effect']['min'], $_SESSION['enemy']['pokeprof'][$enemyId]['moves'][$selectedIndex]['effect']['max']);
                $_SESSION['player']['pokeprof'][$pkpId]['hp'] -= $effect;
                // Generation du message
                $message = $_SESSION['enemy']['pokeprof'][$enemyId]['name'].' utilise '.$_SESSION['enemy']['pokeprof'][$_SESSION['enemy']['pkpId']]['moves'][$selectedIndex]['name'];
                $message .= '.<br>'.$_SESSION['player']['pokeprof'][$pkpId]['name'].' perd '.$effect.' PV.';
            }
            // Verification Pokeprof KO ?
            if($_SESSION['player']['pokeprof'][$pkpId]['hp'] <= 0)
            {
                $_SESSION['player']['pokeprof'][$pkpId]['hp'] = 0;
                // Message
                $message .= '<br>'.$_SESSION['player']['pokeprof'][$pkpId]['name'].' est KO.';
                $end = isLost();
                // Menu
                if($end)
                {
                    $message .= '<br>Tout vos Poképrof son KO, vous avez perdu.';
                    $battleMenu = getEndMenu();
                }
                else
                    $battleMenu = getPokeprofMenu(true);
            }
            else
            {
                // Menu
                $battleMenu = getBattleMenu();
            }
            break;

        case 'changePkp':
            // Attaques
            $battleMenu = getPokeprofMenu();
            $message = 'Choisissez votre Poképrof.';
            break;
            
        case 'selectPkp':
            $message = $_SESSION['player']['pokeprof'][$_SESSION['player']['pkpId']]['name'].' reviens !<br>';
            $_SESSION['player']['pkpId'] = $pkpId;
            $message .= 'En avant '.$_SESSION['player']['pokeprof'][$pkpId]['name'].'.';
            // Attaques
            $battleMenu = getBattleMenu(($ko==1?false:true));
            break;

        case 'getItems':
            // Inventaire
            $battleMenu = getItemsMenu();
            $message = 'Choisissez un objet.';
            break;
        
        case 'useItem':
            // Utilisation d'objet
            $pkpId = $_SESSION['player']['pkpId'];
            $hp = $_SESSION['player']['pokeprof'][$pkpId]['hp'];
            $hpmax = $_SESSION['player']['pokeprof'][$pkpId]['hpmax'];
            $effect = $_SESSION['player']['item'][$itemId]['effect'];
            if($effect == 'max')
                $effect = $hpmax - $hp;
            if($hp + $effect > $hpmax)
                $effect = $hpmax - $hp;
            $_SESSION['player']['pokeprof'][$pkpId]['hp'] = $hp + $effect;
            $_SESSION['player']['item'][$itemId]['number']--;
            $message = 'Vous utilisez '.$_SESSION['player']['item'][$itemId]['name'].'.<br>';
            $message .= $_SESSION['player']['pokeprof'][$pkpId]['name'].' gagne '.$effect.' PV.';
            $battleMenu = getBattleMenu(true);
            break;

        default :
            $battleMenu  = getBattleMenu();
            $message = "Une erreur c'est produite.";
    }

    return array('battleMenu' => $battleMenu, 'message' => $message);
}

function changeEnemy($enemyId = false)
{
    $tab = array();
    $nb = 0;
    $end = false;
    foreach($_SESSION['enemy']['pokeprof'] as $id => $pkp)
    {
        if($pkp['hp'] > 0 && $id != $enemyId)
        {
            $tab[] = $id;
            $nb++;
        }
    }
    if($nb > 0)
    {
        $_SESSION['enemy']['pkpId'] = $tab[random_int(1, $nb)-1];
    }
    else
        $end = true;
    return $end;
}

function isLost()
{
    $nb = 0;
    $end = true;
    foreach($_SESSION['player']['pokeprof'] as $pkp)
    {
        if($pkp['hp'] > 0)
            $nb++;
    }
    if($nb > 0)
        $end = false;
    return $end;
}

?>