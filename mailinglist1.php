<HTML>

<HEAD>
<TITLE>Page d'Incription Mailing Liste du Site de La Marzina (en HTML) </TITLE>
<meta name="description" content="Page Mailing List" />
    <meta name="keywords" content="musique","chanson","francaise","julos","beaucarne","laffaille","rieu","bernard","sexe" />
    <meta name="author" content="La Marzina" />

<link type="text/css" rel="stylesheet" href="style.css" />

<script type="text/javascript">
<!-- Debut JavaScript  



function noEntry()
{

/*
On donne a la variable email la valeur (value) du champ (name="email") du formulaire name="ajout") de la page (document).
*/ 

 email=document.ajout.email.value; 

 if ((email.length<1)||(email.substring(0,6)=="******"))
 {
 alert("Vous devez obligatoirement saisir votre e-mail");
 document.ajout.email.value="******Complétez ce champ";
 document.ajout.email.focus();
 document.ajout.email.select();
 return false;
 } 


/*
On donne a la variable prenom la valeur (value) du champ (name="prenom") du formulaire name="ajout") de la page (document).
*/ 
prenom=document.ajout.prenom.value; 

 if ((prenom.length<1)||(prenom.substring(0,6)=="******"))
 {
 alert("Vous devez obligatoirement saisir votre prenom");
 document.ajout.prenom.value="******Complétez ce champ";
 document.ajout.prenom.focus();
 document.ajout.prenom.select();
 return false;
 } 

 

/*
On donne a la variable nom la valeur (value) du champ (name="nom") du formulaire name="ajout") de la page (document).
*/ 
nom=document.ajout.nom.value; 


 if ((nom.length<1)||(nom.substring(0,6)=="******"))
 {
 alert("Vous devez obligatoirement saisir votre nom");
 document.ajout.nom.value="******Complétez ce champ";
 document.ajout.nom.focus();
 document.ajout.nom.select();
 return false;
 } 

/*
On donne a la variable cpostal la valeur (value) du champ (name="cpostal") du formulaire name="ajout") de la page (document).
*/ 
cpostal=document.ajout.cpostal.value; 


 if ((cpostal.length<1)||(cpostal.substring(0,6)=="******"))
 {
 alert("Vous devez obligatoirement saisir votre code postal");
 document.ajout.cpostal.value="******Complétez ce champ";
 document.ajout.cpostal.focus();
 document.ajout.cpostal.select();
 return false;
 } 


/*
Dans notre condition if on dit que notre variable (donc la valeur du champ) ne doit pas être inférieur à 1 caractère (vous pouvez mettre plus hein) grace à la propriété length qui retourne la valeur correspondant au nombre de caractères de la chaîne.
On y indique aussi (en utilisant l'opérateur logique ||, aussi appelé "OR") que les 6 premiers caractères ne sont pas des *, vous comprendrez pourquoi en lisant la suite.

Si l'une ou l'autre des conditions est remplie on envoi un message d'alerte, on incrit "******Veuillez compléter ce champ" dans le champ et on remet le focus dans le champ.
*/
 else { return true; } // sinon on retourne "vrai"


/* fin de la fonction "noentry"*/
} 


function verifMail(a)
// On ouvre la fonction en lui envoyant la contenu du champ
{
testm = false ;
/*
la on spécifie que l'adresse est false (fausse) dès le début. Cela permet de pouvoir dire que si rien n'est entré dans le champ l'adresse est fausse.
*/ 

 for (var j=1 ; j<(a.length) ; j++) {

/*
Ici, ouverture d'une boucle for à 1 qui permettra de tester du premier jusqu'au dernier caractère de l'adresse e-mail entrée.
*/ 

  if (a.charAt(j)=='@') {
// La on commence les conditions de tests. Ici on cherche l'@
   if (j<(a.length-4)){
// Ici on regarde si il y a bien 4 caractère après le @
    for (var k=j ; k<(a.length-2) ; k++) {
// On ouvre une seconde boucle pour 
     if (a.charAt(k)=='.') testm = true;
/*
on vérifie qu'il y ai bien un point et on met la variable testm à true (implicitement si toutes les conditions sont remplies) puis on ferme les conditions et boucles
*/
    }
   }
  }
 }


if (testm==false) alert('Votre adresse e-mail est incorrecte.');
// si testm est évalué à false, on ouvre une boite d'alerte pour prévenir. 

/* else alert('Votre adresse e-mail semble correcte.'); 
Cette boite d'alerte est facultative, ici c'est pour le besoin de la démonstration. Chez vous,
vous pouvez complètement enlever cette condition else car si c'est true le traitement du formulaire peut avoir lieu.
*/ 

return testm ;

}
// et on ferme la fonction "verifmail(a)".


// fin du script -->
</script> 

</HEAD>

<BODY BGCOLOR="#F97DDD" TEXT="BLACK" LINK="BLACK" VLINK="PURPLE" ALINK="PINK">
<!--- Balise H1><MARQUEE> 1&egrave;re Page d'accueil </MARQUEE></H1 --->
      
  
<DIV HEIGTH="420">

<!-- 1er Tableau de colonnes -->
<TABLE WIDTH="100%" HEIGHT="161" BORDER="0">
<TR> 
	<TH WIDTH="137">
    		<IMG ALT="Logo La Marzina" SRC="IMG/logo_lamarzina.gif" />
	</TH>
	
     	<TH ALIGN="CENTER">
        	 <IMG ALT="Banni&egrave;re de La Marzina" SRC="IMG/entete_bon.gif" />
        </TH>

    	<TH WIDTH="137">
   		 <IMG ALT="Logo La Marzina" SRC="IMG/logo_lamarzina.gif" />
	</TH>
</TR>
</TABLE>

<!-- 2&egrave;me Tableau du bas de page -->
<TABLE WIDTH="100%" BORDER="0">
<TR>
   <TH WIDTH="137" VALIGN="TOP">

   <!-- sous-tableau colonne de gauche  -->
   <TABLE CELLPADING="0" BORDER="0">
    <TR><br /></TR>
    <TR><br /></TR>

   <TR>
       <A TITLE="1&egrave;re Page d' Accueil" href="index.php">Accueil</A>
    </TR>
    <TR><br /></TR>

    <TR>
	    <!-- Lien externe sur blog lamarzina.org -->
       <strong>
       <A TITLE="Pr&eacute;sentation La Marzina" href="http://www.lamarzina.org" TARGET="_blank">
	   Pr&eacute;sentation</A>
       </stronG>
    </TR>
    <TR><br /></TR>

    <TR>
	<!-- Lien interne sur page exemples.php -->
       <strong>
            <A TITLE="Exemples de Webzines mensuels" href="exemples2.php">Exemples</A>
       </stronG>
    </TR>
    <TR><br /></TR>

    
    <TR>
	<!-- Lien interne sur page liensamis.php --> 
       <strong>
       <A TITLE="Liens Sites Amis" href="liensamis3.php">Liens Amis</A>
       </stronG>
    </TR>
    <TR><br /></TR>

    </TABLE>
    </TH>

    <!-- colonne centrale -->
    <TH ALIGN="CENTER">
       <!-- Formulaire de saisie pour la Mailing list -->
       <h1> Abonnement au Webzine </h1>

       <form name=ajout method="post" action="http://www.lamarzina.com/inscription2.php" onsubmit="return noEntry()">
        <p><br /><br /></p>

        <p>Votre E-mail :
            <input type="text" size="30" name="email" maxlength="50" />
        </p>
	<p><br /></p>

	<p>Mme :
            <input type="radio" name="civil" value="2" checked />
           Mr :
           <input type="radio" name="civil" value="1" />
        </p>
	<p><br /></p>


        <p>Votre Pr&eacute;nom :
            <input type="text" size="30" name="prenom" class="pcprenom" maxlength="50" />
        </p>
	<p><br /></p>

	<p>&nbsp; Votre NOM &nbsp; :
            <input type="text" size="30" name="nom" class="pcnom" maxlength="50" />
        </p>
	<p><br /></p>


	<p>&nbsp; Code Postal &nbsp; :
            <input type="text" size="5" name="cpostal" class="pccpostal" maxlength="5" />
        </p>
	<p><br /></p>


        <p>
            <input type="submit" name="submit" class="pcsubmit" value="Envoyer" onClick="verifMail(document.ajout.email.value)" />
        </p>
       </form>
    </TH>


   <TH WIDTH ="137" VALIGN="TOP">
   <!-- sous-tableau colonne de droite -->
   <TABLE CELLPADING="0" BORDER="0">
    <TR><br /></TR>
    <TR><br /></TR>

    <TR>
        <!-- Lien interne sur page mailinglist.php-->
		<strong>
          <A TITLE="Abonnement Webzine La Marzina"" href="mailinglist1.php">Newsletter</A>
        </strong>
    </TR>
    <TR><br /></TR>

    <TR>
	 <!-- Lien interne sur page evenementiels.php --> 
       <strong>
       <A TITLE="Ev&egrave;nements musicaux" HREF="evenementiels3.php">Ev&egrave;nementiels</A>
       </stronG>
    </TR>
    <TR><br /></TR>


    <TR>
	<!-- Lien externe vers FaceBook --> 
       <strong>
         <A TITLE="FaceBook" href="https://www.facebook.com/martine.lamarzina" TARGET="_blank">FaceBook</A>
       </strong>
    </TR>
   <TR><br /></TR>

   <TR VALIGN="Bottom">
     <!-- Lien interne sur page contact.php --> 
    		 <A TITLE="Adresses de Contact" href="contact1.php">Contact</A>
   </TR>
   <TR><br /></TR>

  </TABLE>
  </TH>

</TR>
</TABLE>

</DIV>
</BODY>

</HTML>