<?php
    header("Content-type: text/css");

    $COLBG="#F3FFF3";        /*Day Mode or Night Mode?*/
    $COLFG="#404040";        /*Primary Foreground, main text.*/
    $COLACCENT="#505030";    /*Accent Colour*/
    $COLHILITE="#a02020";    /*High emphasis, Interactive elements*/
    $COLLOLITE="#703030";    /*Low emphasis*/
    $COLSUBDUE="#5555";      /*Greyed or disabled elements.*/
    $COLWARN="#f00";         /*For testing and error messages.*/

    echo "/*Wy CSS*/

html, body {
    background-color: $COLBG;
    color: $COLFG;
    border-color: $COLACCENT;
}

h1,h2,h3,h4,h5,em {
    color: $COLHILITE
}

input[type='text'], textarea {
    background-color: $COLLOLITE;
    color: $COLHILITE;
}

a:link   {
    color: $COLHILITE;
}

a:visited   {
    color: $COLLOLITE;
}

button  {

}

table, th, td   {
    border: 1px solid;
    border-collapse: collapse;
}

.test   {
    border: 1px solid $COLWARN;
}

div.outerBodyDiv    {
    margin: 0px;
    margin-left: 10%;
    margin-right: 10%;
    padding: 0px;

    border: thin solid $COLACCENT;
}

div.bodyDiv         {
    width: auto;
    border-bottom: thin solid $COLACCENT;
}

div.bannerMessage   {
    margin: 0px;
    text-align: center;
    background-color: $COLSUBDUE;
    border-bottom: 1px solid $COLACCENT;
}

div.redMessage  {
    background-color: $COLWARN;
    color: $COLHILITE;
}

footer  {
    color: $COLBG;
    background-color: $COLACCENT;
}

/* DROPBTN */
.dropbtn {
  background-color: $COLHILITE;
  color: $COLFG;
  padding-left: 2em;
  padding-right: 2em;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  color: $COLBG;
  background-color: $COLACCENT;
  /*min-width: 160px;*/
  /*box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);*/
  z-index: 1;
}

.dropdown-content a {
  color: black;
  /*padding: 12px 16px;*/
  text-decoration: none;
  display: block;
  padding: 1em;
}

.dropdown-content a:hover {background-color: $COLLOLITE;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: $COLACCENT;}";

?>
