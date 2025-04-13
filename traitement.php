<?php
if (isset($_POST)) {
  $nom=$_POST['nom'];
  if(empty($_POST['nom'])){
     echo " veuiller ramplir ";
  }else {
     echo " votre nom est " .$nom;
  }
  $prenom=$_POST['prenom'];
  if(empty($_POST['prenom'])){
    echo " veuiller ramplir ";
 }else {
    echo " votre prenom est " .$prenom;
 }
  $matricule=$_POST['matricule'];
  if(empty($_POST['matricule'])){
    echo " veuiller ramplir ";
 }else {
    echo " votre matricule est " .$matricule;
 }
  $email=$_POST['email'];
  if(empty($_POST['email'])){
    echo " veuiller ramplir ";
 }else {
     echo " votre addresse mail est " .$email;
 }
  $nomber=$_POST['nomber'];
  if(empty($_POST['nomber'])){
    echo " veuiller ramplir ";
 }else {
    echo " votre numero de telephone est" .$nomber;
 }
  /*$M=$_POST['M'];
  $F=$_POST['F'];*/
}

?>
