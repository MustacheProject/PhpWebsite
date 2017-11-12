<?php
function pageBuilder($page){
  classesInclusion();
  doctypeDeclaration();
  headerBuilder($page);
  menuBuilder();
  contentBuilder($page);
  footerBuilder();
  closePage();
}

function headerBuilder($page){
  include_once "header.php";
}

function menuBuilder(){
  include_once 'Navigation.php';
}

function contentBuilder($page){
  echo '<body>';
  choosePayoff($page);
  if(!@include_once $page.'.php'){
    include_once "errore.php";
  }


  echo '</body>';
}

function footerBuilder(){
    include_once 'Footer.php';
}

function choosePayoff($page){
  if($page == "content"){
      include_once 'Payoff.php';
    } else{
      include_once 'Payoff_second.php';
    }
}

function doctypeDeclaration(){
  echo "<!DOCTYPE html><html>";
}

function closePage(){
  echo "</html>";
}

function classesInclusion(){
  include_once "GlobalVariables.php";
}

 ?>
