<?php
                        $resultat = $kobling->query($sql);
                        echo "<table>"; // Starter tabellen
                        echo "<tr>"; // Lager en rad med overskrifter
                        echo "<th>Rom_id</th>";
                        echo "</tr>";
                        while($rad = $resultat->fetch_assoc()) {
                        $IdRom = $rad["Rom_id"];
                        echo "<tr>";
                        echo "<td>$IdRom</td>";   
                        echo "</tr>";
                        }
                        echo "</table>"; // Avslutter tabellen
                ?>