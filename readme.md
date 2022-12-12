# Read me - Projekt Chatbox / WWI21A
##### Moritz Tritschler, Cedric Schnee, Fabian Strazic, Anabelle Tritschler
#

>### **Für Welche Programmiersprachen haben wir uns entschieden und wieso?** 

- PHP: 
    - **Verknüpfung mit Datenbanken**: Eines der besten Eigenschaften an PHP ist es, dass man sie mit einer Vielzahl an Datenbaken verknüpfen kann. Unteranderem auch MySQL. Datenbanken sind für dieses Projekt unerlässlich. 
    - **Eingebette Programmierung mit HTML**: PHP lässt sich einfach mit HTML verknüpfen bzw. einbetten. Da das Projekt eine Webanwendung werden soll, ist dies optimal. 
    - **Vertraut**: Mit PHP haben wir bereits in unserer Studentenlaufbahn Kontakt gehabt, weshakb diese Programmiersprache nicht neu für uns ist. Einige Funktionen konnten wir bereits im Vorfeld, sodass keine "riesen" Recherche notwendig war. 
- JavaSkript: 
    - **Zusammenarbeit mit HTML**: JS arbeitet mit HTML Hand in Hand. Mit JavaScript kannst du Web-Elemente interaktiv machen. Es kann neben deinem HTML und CSS verwendet werden und ist ein wichtiges Werkzeug für jeden Webentwickler.
- MySQL / phpmyadmin: 
    - **Vertraut**: MySQL ist uns bereits bekannt 
    - **Benutzerfreundich**: phpmyadmin ist durch die grafische Oberfläche sehr Benutzerfreundlich. Verwaltung der Datenbank und der Tabellen ist dadurch sehr einfach.
    - **Funktionieren perfekt zusammen**: phpmyadmin unterstüzt die meisten MySQL Befehle
- CSS: 
    - **Style**: CSS wird für die optmierung der Web Anwendung verwendet
>### **Erklärung des Codes**
 - **/chatapp/group**
    - **index.php**: Beschreibt die Hauptdatei des Gruppenchats. Hier werden Grundlegende Funktionen, wie das "FETT", "KURSIV" oder "UNTERSTRICHEN" programmiert, sowie Titel oder auch verlassen des Chats. Desweiteren wird auch hier die "log.html" immer wieder neu eingelesen, um so die eingegebenen Nachrichten zu zeigen. Gleichzeitig wird diese Datei auch mit der "group_chat.php" verbunden, um sich so den Namen des derzeit eingeloggten Nutzers zu zeigen.
    - **"log.html"**: Hier werden die eingegebenen Nachrichten gespeichert.
    - **post.php**: Die post.php ist dafür zuständig, die eingegebenen Nachrichten in die log Datei einzutragen.
    - **style.css**: Für das Design des Gruppenchats zuständig
- **/chatapp/javascript/**
    - **chat.js**: Ist für die Grundlegnenden Funktionen des Privatchats zuständig. 
    - **login.js**: Ist für die Grundlegenden Funktionen des Logins zuständig.
    - **pass-show-hide.js**: Ist dafür zuständig, das eingegebene Passwort zu zeigen und wieder zu verstecken. 
    - **singup.js**: Befasst sich mit den Grundlegenden Funktionen des Regstrierens. 
    - **users.js**: Ist für die Grundlegenden Fuktionen der User Anzeige zuständig. Beinhaltetet aber auch Funktionen zur "Such-Funktion".
- **/chatapp/php**
    - **config.php**: Stellt die Verbindung mit der Datenbank her und gibt falls das nicht möglich ist, einen Error aus. 
    - **data.php**: Zieht sich alle benötigten Daten, des eimgeloggten Users aus der Datenbank. 
    - **get-chat.php**: Holt sich den Chat aus der Datenbank mit den entsprechenden User.
    - **insert-chat.php**: Fügt den eingegebenen Chat in die Datenbank mit den entsprechenden User. 
    - **login.php**: Binhaltet alle Funktionen für den Login. Gleicht die eingegebenen Daten mit der Datenbank ab und gibt bei Falscheingabe einen Error aus. 
    - **logout.php**: Für den Logout zuständig. Bringt dich aus dem Chat und stellt dich Offline.
    - **search.php**: Befasst sich mit der Funktion des "Suchens": Schaut ob es den eingegeben User in der Datenbank gibt. 
    - **signup.php**: Binhaltet alle Funktionen für das Registrieren. Fängt mögliche Falscheingaben ab und gibt einen Error aus. Bei erfolgreicher Registration werden die eingegebenen Daten in die Datenbank aufgenommen und eine "User_id" und "Unique_id", zur Identifikation für die restlichen Funktionen, vergeben.
    - **users.php**: Zeigt alle registrierten Nutzer, außer sich selbst, an. Zieht sich diese aus der Datenbank.
- **/chatapp/php/images**
    - Hier werden die User-Bilder von der Registrierung gespeichert. 
- **/chatapp/** 
    - **chat.php**: Für die Funktionen des Privatchats zuständig.
    - **group_chat.php**: Zieht sich den Namen, des eingeloggten Users für den Gruppenchat.
    - **header.php**: Binhaltet alles, was den Header betrifft und bindet die "style.css" für das Design mit ein. 
    - **index.php**: Zeigt das Regstrier-Fenster
    - **login.php**: Zeigt das Login-Fenster
    - **style.css**: Für das Design der Regstrierung, Login und des gesamten Privatchats zuständig.
    - **users.php**: Zeigt das User-Fenster auf dieses man nach dem Login oder der Regstrierung gelangt.


