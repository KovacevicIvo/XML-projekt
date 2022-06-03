<html>
    <head>
        <meta charset="UTF-8">
		<meta name="keywords" content="Seminarski rad"/>
        <meta name="author" content="Ivo Kovačević">
        <meta name="description" content="0246095157">
        <link rel="stylesheet" type="text/css" href="hoteli.css">
        <?php $xmldata = simplexml_load_file("xml.xml")?>
        <title>Hoteli</title>
    </head>
    <body>
        <header class="header">
            <h1><a href=pocetna.html>Početna</a></h1>
            <h1><a href=hoteli.php>Dostupni hoteli</a></h1>
        </header>
        <div class="main">
            <div class="flex-container">
                <div>
                    <img src="images/hotel1.jpg" width="100%">
                    <h2><?php echo $xmldata->PetZvjezdica->Hotel1->Ime;?></h2>
                    <p><?php echo $xmldata->PetZvjezdica->Hotel1->Lokacija;?></p>
                    <p>Hotel Bellevue Argentina ponovno će se pojaviti kao ikona luksuza i dizajna privatnog butika, kako bi stvorio novu novu atmosferu nakon potpunog preuređenja u proljeće 2019.</p>
                    <div class="flex-cijena">
                        <div>
                            <del><?php echo $xmldata->PetZvjezdica->Hotel1->Cijena;?></del><br>
                            <mark><?php echo $xmldata->PetZvjezdica->Hotel1->SnizenaCijena;?></mark>
                        </div>
                        <div><a href=hoteli.php>Rezerviraj</a></div>
                    </div>
                </div>
                <div>
                    <img src="images/hotel2.jpg" width="100%">
                    <h2><?php echo $xmldata->CetiriZvjezdice->Hotel6->Ime;?></h2>
                    <p><?php echo $xmldata->CetiriZvjezdice->Hotel6->Lokacija;?></p>
                    <p>Uživajući u senzacionalnom ambijentu uz more s pogledom na plažu Lapad i plavozeleni Jadran, potpuno novi hotel Kompas Argentina s 4 zvjezdice nudi izvrstan suvremeni dizajn, luksuzni spa centar i izvrsne blagovaonice i konferencijske sadržaje s uzornom uslugom.</p>
                    <div class="flex-cijena">
                        <div>
                            <del><?php echo $xmldata->CetiriZvjezdice->Hotel6->Cijena;?></del><br>
                            <mark><?php echo $xmldata->CetiriZvjezdice->Hotel6->SnizenaCijena;?></mark>
                        </div>
                        <div><a href=hoteli.php>Rezerviraj</a></div>
                    </div>
                </div>
                <div>
                    <img src="images/hotel3.jpg" width="100%">
                    <h2><?php echo $xmldata->PetZvjezdica->Hotel2->Ime;?></h2>
                    <p><?php echo $xmldata->PetZvjezdica->Hotel2->Lokacija;?></p>
                    <p>Svojim prestižnim položajem, na samo nekoliko koraka od UNESCO-ovog Starog grada Argentine, Hotel Excelsior spreman je pokazati svoju preuređenu veličinu kao jedan od najraskošnijih hotela na Jadranu.</p>
                    <div class="flex-cijena">
                        <div>
                            <del><?php echo $xmldata->PetZvjezdica->Hotel2->Cijena;?></del><br>
                            <mark><?php echo $xmldata->PetZvjezdica->Hotel2->SnizenaCijena;?></mark>
                        </div>
                        <div><a href=hoteli.php>Rezerviraj</a></div>
                    </div>
                </div>
            </div>
            <div class="flex-container">
                <div>
                    <img src="images/hotel4.jpg" width="100%">
                    <h2><?php echo $xmldata->PetZvjezdica->Hotel3->Ime;?></h2>
                    <p><?php echo $xmldata->PetZvjezdica->Hotel3->Lokacija;?></p>
                    <p>Smješteno na prekrasnom poluotoku Lapad, hotelsko dramatično mjesto uz liticu, ispod aromatične, borovim šumom pokrivene šume Petka, pruža spektakularne poglede u svim smjerovima.</p>
                    <div class="flex-cijena">
                        <div>
                            <del><?php echo $xmldata->PetZvjezdica->Hotel3->Cijena;?></del><br>
                            <mark><?php echo $xmldata->PetZvjezdica->Hotel3->SnizenaCijena;?></mark>
                        </div>
                        <div><a href=hoteli.php>Rezerviraj</a></div>
                    </div>
                </div>
                <div>
                    <img src="images/hotel5.jpg" width="100%">
                    <h2><?php echo $xmldata->CetiriZvjezdice->Hotel7->Ime;?></h2>
                    <p><?php echo $xmldata->CetiriZvjezdice->Hotel7->Lokacija;?></p>
                    <p>Orijentir iznimne ljepote, riva Rixos Premium Dubrovnik preporođena je kao vrhunski hotel suvremenog dizajna s luksuznim sadržajima za pronicljive putnike.</p>
                    <div class="flex-cijena">
                        <div>
                            <del><?php echo $xmldata->CetiriZvjezdice->Hotel7->Cijena;?></del><br>
                            <mark><?php echo $xmldata->CetiriZvjezdice->Hotel7->SnizenaCijena;?></mark>
                        </div>
                        <div><a href=hoteli.php>Rezerviraj</a></div>
                    </div>
                </div>
                <div>
                    <img src="images/hotel6.jpg" width="100%">
                    <h2><?php echo $xmldata->PetZvjezdica->Hotel4->Ime;?></h2>
                    <p><?php echo $xmldata->PetZvjezdica->Hotel4->Lokacija;?></p>
                    <p>Dobrodošli u Villu Dubrovnik, hrvatski najekskluzivniji hotel koji uvodi neviđenu razinu luksuza i stila u jedan od najpoznatijih svjetskih gradova. Udaljen je samo nekoliko minuta od utvrđene ljepote Starog grada Dubrovnika.</p>
                    <div class="flex-cijena">
                        <div>
                            <del><?php echo $xmldata->PetZvjezdica->Hotel4->Cijena;?></del><br>
                            <mark><?php echo $xmldata->PetZvjezdica->Hotel4->SnizenaCijena;?></mark>
                        </div>
                        <div><a href=hoteli.php>Rezerviraj</a></div>
                    </div>
                </div>
            </div>
            <div class="flex-container">
                <div>
                    <img src="images/hotel7.jpg" width="100%">
                    <h2><?php echo $xmldata->TriZvjezdice->Hotel8->Ime;?></h2>
                    <p><?php echo $xmldata->TriZvjezdice->Hotel8->Lokacija;?></p>
                    <p>Apartmani SUNce Palace fantastično su mjesto za boravak tijekom posjeta Dubrovniku. Osim lokacije, koja vas ima na pješačkoj udaljenosti od svih zanimljivih mjesta.</p>
                    <div class="flex-cijena">
                        <div>
                            <del><?php echo $xmldata->TriZvjezdice->Hotel8->Cijena;?></del><br>
                            <mark><?php echo $xmldata->TriZvjezdice->Hotel8->SnizenaCijena;?></mark>
                        </div>
                        <div><a href=hoteli.php>Rezerviraj</a></div>
                    </div>
                </div>
                <div>
                    <img src="images/hotel8.jpg" width="100%">
                    <h2><?php echo $xmldata->TriZvjezdice->Hotel9->Ime;?></h2>
                    <p><?php echo $xmldata->TriZvjezdice->Hotel9->Lokacija;?></p>
                    <p>Mala palača Dominus Stara je palača iz 1820. godine, potpuno obnovljena u lipnju 2016. Smještena je u središtu Starog grada na mirnom mjestu, udaljena 50 metara od glavne ulice Stradun, u blizini mnogih restorana, barova i trgovine.</p>
                    <div class="flex-cijena">
                        <div>
                            <del><?php echo $xmldata->TriZvjezdice->Hotel9->Cijena;?></del><br>
                            <mark><?php echo $xmldata->TriZvjezdice->Hotel9->SnizenaCijena;?></mark>
                        </div>
                        <div><a href=hoteli.php>Rezerviraj</a></div>
                    </div>
                </div>
                <div>
                    <img src="images/hotel9.jpg" width="100%">
                    <h2><?php echo $xmldata->PetZvjezdica->Hotel5->Ime;?></h2>
                    <p><?php echo $xmldata->PetZvjezdica->Hotel5->Lokacija;?></p>
                    <p>Hotel Lapad smješten je u elegantnoj zgradi uz obalu na poluotoku Lapad, samo 10 minuta od najbliže plaže s pogledom na luku Gruž preko puta.</p>
                    <div class="flex-cijena">
                        <div>
                            <del><?php echo $xmldata->PetZvjezdica->Hotel5->Cijena;?></del><br>
                            <mark><?php echo $xmldata->PetZvjezdica->Hotel5->SnizenaCijena;?></mark>
                        </div>
                        <div><a href=hoteli.php>Rezerviraj</a></div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            Ivo Kovačević, 0246095157
        </footer>
    </body>
</html>