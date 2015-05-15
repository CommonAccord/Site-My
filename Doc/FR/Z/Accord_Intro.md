Note=Pour parameteriser le nombre de parties et d'autres personnes.

Personnes.Sec={Parties.Sec}<li>{Amies.Sec}
 
Parties.Liste={Parties.Liste.2}

Amies.Liste={Amies.Liste.2}

Note=le document

Model.Root={Sec}

Sec=<ul type="none" style="padding-left: 0"><li>{Personnes.Sec}<li>{Date.Sec}</ul>{Que.Sec}{Conviennent.sec}

Parties.Sec=<b>{Parties.Ti}</b>{Parties.xliste}

Parties.xliste=<ul type="none"><li>{Parties.Liste}<li>{Parties.Def.sec}</ul>

Parties.Liste.2={P1.sec}<li>{P2.sec}

Parties.Liste.3={P1.sec}<li>{P2.sec}<li>{P3.sec}

Parties.Liste.4={P1.sec}<li>{P2.sec}<li>{P3.sec}<li>{P4.sec}

Parties.Liste.5={P1.sec}<li>{P2.sec}<li>{P3.sec}<li>{P4.sec}<li>{P5.sec}

Parties.Liste.6={P1.sec}<li>{P2.sec}<li>{P3.sec}<li>{P4.sec}<li>{P5.sec}<li>{P6.sec}

P1.sec={P1.N,E,A},<br>    représenté{P1.Nom./e} par {P1.Sign.Titre.son/sa}, {P1.Sign.Nom-Plein},<br>         ( « {P1.le/la} » )

P2.sec={P2.N,E,A},<br>     représenté{P2.Nom./e} par {P2.Sign.Titre.son/sa}, {P2.Sign.Nom-Plein},<br>         ( « {P2.le/la} » )

P3.sec={P3.N,E,A},<br>     représenté{P3.Nom./e} par {P3.Sign.Titre.son/sa}, {P3.Sign.Nom-Plein}, <br>        ( « {P3.le/la} » )

P4.sec={P4.N,E,A},<br>     représenté{P4.Nom./e} par {P4.Sign.Titre.son/sa}, {P4.Sign.Nom-Plein}, <br>        ( « {P4.le/la} » )

P5.sec={P5.N,E,A},<br>     représenté{P5.Nom./e} par {P5.Sign.Titre.son/sa}, {P5.Sign.Nom-Plein},<br>         ( « {P5.le/la} » )

P6.sec={P6.N,E,A},<br>     représenté{P6.Nom./e} par {P6.Sign.Titre.son/sa}, {P6.Sign.Nom-Plein}, <br>        ( « {P6.le/la} » )

P1.N,E,A={P1.Nom-Plein}, {P1.Forme} dont l'adresse principal est {P1.Adr-1,2,3}

P2.N,E,A={P2.Nom-Plein}, {P2.Forme} dont l'adresse principal est {P2.Adr-1,2,3}

P3.N,E,A={P3.Nom-Plein}, {P3.Forme} dont l'adresse principal est {P3.Adr-1,2,3}

P4.N,E,A={P4.Nom-Plein}, {P4.Forme} dont l'adresse principal est {P4.Adr-1,2,3}

P5.N,E,A={P5.Nom-Plein}, {P5.Forme} dont l'adresse principal est {P5.Adr-1,2,3}

P6.N,E,A={P6.Nom-Plein}, {P6.Forme} dont l'adresse principal est {P6.Adr-1,2,3}

Parties.Ti=Entre les {parties} :

Parties.Def.sec=Dénommés individuellement une « {partie} » et collectivement  les « {parties} »



Amies.xliste=<ul type="none"><li>{Amies.Liste}<li>Dénommés individuellement une « {Partie_Tierce_Identifiée} » et collectivement  les « {Parties_Tierce_Identifiées} »</ul>

Amies.Ti=Des tierces mentionnés dans cette {Accord}:

Amies.Sec=<b>{Amies.Ti}</b>{Amies.xliste}

Amies.Liste.2={Amie1.sec}<li>{Amie2.sec}

Amies.Liste.3={Amie1.sec}<li>{Amie2.sec}<li>{Amie3.sec}

Amies.Liste.4={Amie1.sec}<li>{Amie2.sec}<li>{Amie3.sec}<li>{Amie4.sec}

Amies.Liste.5={Amie1.sec}<li>{Amie2.sec}<li>{Amie3.sec}<li>{Amie4.sec}<li>{Amie5.sec}

Amies.Liste.6={Amie1.sec}<li>{Amie2.sec}<li>{Amie3.sec}<li>{Amie4.sec}<li>{Amie5.sec}<li>{Amie6.sec}

Amie1.sec={Amie1.N,E,A} ("{Amie1.Role}")

Amie2.sec={Amie2.N,E,A} ("{Amie2.Role}")

Amie3.sec={Amie3.N,E,A} ("{Amie3.Role}")

Amie4.sec={Amie4.N,E,A} ("{Amie4.Role}")

Amie5.sec={Amie5.N,E,A} ("{Amie5.Role}")

Amie6.sec={Amie6.N,E,A} ("{Amie6.Role}")

Date.Sec=DATE EFFECTIVE: {Accord.Sign.Date} (la « {Date_de_l'Accord} » )

Que.Sec={Que.sec}

Que.sec=<ul type="none"><li>{Que.secs}</ul>

Conviennent.sec=il a été convenu ce qui suit :