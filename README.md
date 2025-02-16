Crea la tua armatura di Ironman seguendo il modello visto a lezione, seguendo i seguenti punti:
metti ogni classe (abstract o no) in un file diverso, utilizzando nel file principale la funzione require()
crea un esercito random di Ironman
aggiungi un contatore di quanti Ironman hai creato

-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

In questo codice ho progettato una classe IronmanArmor in PHP, che rappresenta l'armatura di Iron Man con capacità di attacco e difesa.

Ho utilizzato programmazione orientata agli oggetti (OOP) con il principio della dipendenza da astrazioni, dato che il costruttore della classe accetta istanze di Attack e Defense, due classi astratte implementate da classi concrete come Laser e EnergyShield.
Ho implementato un contatore statico ($counter) per monitorare quante istanze della classe IronmanArmor vengono create.
Ho creato metodi specifici (ironmanAttack() e ironmanDefense()) per delegare le azioni di attacco e difesa agli oggetti ricevuti dal costruttore.
Infine, ho istanziato un oggetto della classe IronmanArmor utilizzando Laser come attacco e EnergyShield come difesa, eseguendo poi le rispettive azioni e stampando il numero di istanze create.

-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

In this code, I designed an IronmanArmor class in PHP, which represents Iron Man’s armor with attack and defense capabilities.

I applied object-oriented programming (OOP) principles, particularly dependency on abstractions, as the class constructor accepts instances of Attack and Defense, two abstract classes implemented by concrete classes like Laser and EnergyShield.
I implemented a static counter ($counter) to keep track of how many instances of the IronmanArmor class are created.
I created dedicated methods (ironmanAttack() and ironmanDefense()) to delegate attack and defense actions to the objects received by the constructor.
Finally, I instantiated an IronmanArmor object using Laser as the attack and EnergyShield as the defense, then executed the respective actions and printed the number of instances created.







