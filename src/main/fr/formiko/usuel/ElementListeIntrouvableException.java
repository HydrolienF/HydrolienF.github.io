package fr.formiko.usuel.exeption;
import fr.formiko.usuel.debug; import fr.formiko.usuel.erreur; import fr.formiko.usuel.g; import fr.formiko.formiko.Main;
//def par défaut des fichiers depuis 0.79.5

public class ElementListeIntrouvableException extends Exception{
  public ElementListeIntrouvableException(String élément, int id,boolean b){
    //erreur.erreur("aucune créature n'as pu être retiré","CCreature.retirer",true);
    erreur.erreur(g.get("ElementListeIntrouvableException",1,"La/Le")+" "+élément+" ("+id+") "+g.get("ElementListeIntrouvableException",2,"n'as pu être retiré"),"ElementListeIntrouvableException",b);
  }
  public ElementListeIntrouvableException(String e, int id){ this(e,id,false);}
}
