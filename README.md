Das ist ein abgewandeltes Beispiel der Clean Architecture, von Robert C. Martin.
Er arbeitet viel mit Data Structures, wie man sie z.B. aus der Sprache C kennt.
Es geht mir jedoch zu weit von der Idee mit OOP weg, die Daten und Methoden in einem Objekt zusammen kapselt.
Das Buch Elegant Objects von Yegor Bugayenko kann ich dazu sehr empfehlen. 

Die Klassen BlogPostDatabase, BlogPostListRequest und BlogPostListResponse werden außerhalb der Business Logic benutzt.
Damit gibt es eine klare Trennung zwischen der konkreten Implementierung der Datenbank Engine und Framework zu der Business Logic.
Wenn die Datenbank Engine oder das Framework ein Update bekommen soll, oder ganz ausgetauscht wird, muss die Business Logic nicht mehr angefasst werden.