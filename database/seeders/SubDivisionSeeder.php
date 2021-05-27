<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SubDivisionSeeder extends Seeder
{
    public function run()
    {
        DB::table('sub_divisions')->delete();
        $sub_divisions = array(
        
            //North west starting
                //Mezam
                        array('name'=>'Bamenda 1', 'division_id'=>1),
                        array('name'=>'Bamenda 2', 'division_id'=>1),
                        array('name'=>'Bamenda 3', 'division_id'=>1),
                        array('name'=>'Bafut', 'division_id'=>1),
                        array('name'=>'Bali', 'division_id'=>1),
                        array('name'=>'Santa', 'division_id'=>1),
                        array('name'=>'Tubah', 'division_id'=>1),
                //Boyo
                        array('name'=>'Belo', 'division_id'=>2),
                        array('name'=>'Bum', 'division_id'=>2),
                        array('name'=>'Fundong', 'division_id'=>2),
                        array('name'=>'Njinikom', 'division_id'=>2),
                //Bui
                        array('name'=>'Elak-Oku', 'division_id'=>3),
                        array('name'=>'Jakiri', 'division_id'=>3),
                        array('name'=>'Kumbo (urban)', 'division_id'=>3),
                        array('name'=>'Kumbo (rural)', 'division_id'=>3),
                        array('name'=>'Mbiame', 'division_id'=>3),
                        array('name'=>'Nkum', 'division_id'=>3),
                        array('name'=>'Nkor', 'division_id'=>3),
                //Donga
                        array('name'=>'Ako', 'division_id'=>4),
                        array('name'=>'Misaje', 'division_id'=>4),
                        array('name'=>'Ndu', 'division_id'=>4),
                        array('name'=>'Nkambe', 'division_id'=>4),
                        array('name'=>'Nwa', 'division_id'=>4),
                //Mechum
                        array('name'=>'Benakuma', 'division_id'=>5),
                        array('name'=>'Furu-Awa', 'division_id'=>5),
                        array('name'=>'Wum', 'division_id'=>5),
                        array('name'=>'Zhoa', 'division_id'=>5),
                //Momo
                        array('name'=>'Andek', 'division_id'=>6),
                        array('name'=>'Batibo', 'division_id'=>6),
                        array('name'=>'Mbengwi', 'division_id'=>6),
                        array('name'=>'Njikwa', 'division_id'=>6),
                        array('name'=>'Wifikum-Boffe', 'division_id'=>6),
                //Ngo-ket
                        array('name'=>'Ndop', 'division_id'=>7),
                        array('name'=>'Balikumbat', 'division_id'=>7),
                        array('name'=>'Babessi', 'division_id'=>7),
            
            //South West starting 
                //Fako
                        array('name'=>'Limbe 1', 'division_id'=>8),
                        array('name'=>'Limbe 2', 'division_id'=>8),
                        array('name'=>'Limbe 3', 'division_id'=>8),
                        array('name'=>'Buea', 'division_id'=>8),
                        array('name'=>'Tiko', 'division_id'=>8),
                        array('name'=>'Muyuka', 'division_id'=>8),
            
                //Koupé-Manengouba
                        array('name'=>'Bangem', 'division_id'=>9),
                        array('name'=>'Tombel', 'division_id'=>9),
                        array('name'=>'Nguti', 'division_id'=>9),	
            
                //Lebialem
                        array('name'=>'Alou', 'division_id'=>10),
                        array('name'=>'Menji', 'division_id'=>10),
                        array('name'=>'Wabane', 'division_id'=>10),
            
                //Manyu
                        array('name'=>'Akwaya', 'division_id'=>11),
                        array('name'=>'Eyumojock (urban)', 'division_id'=>11),
                        array('name'=>'Upper Bayang (rural)', 'division_id'=>11),
                        array('name'=>'Mamfe Central', 'division_id'=>11),
            
                //Meme
                        array('name'=>'Konye', 'division_id'=>12),
                        array('name'=>'Kumba I', 'division_id'=>12),
                        array('name'=>'Kumba II', 'division_id'=>12),
                        array('name'=>'Kumba III', 'division_id'=>12),
                        array('name'=>'Mbonge', 'division_id'=>12),
            
                //Ndian
                        array('name'=>'Bamusso', 'division_id'=>13),
                        array('name'=>'Dikome-Balu', 'division_id'=>13),
                        array('name'=>'Ekondo-Titi', 'division_id'=>13),
                        array('name'=>'Idabato', 'division_id'=>13),
                        array('name'=>'Isanguele', 'division_id'=>13),
                        array('name'=>'Kombo-Abedimo', 'division_id'=>13),
                        array('name'=>'Mundemba', 'division_id'=>13),
                        array('name'=>'Toko', 'division_id'=>13),
            
            //Adamoua subdivision.
                //Djérem
                        array('name'=>'Ngoundai', 'division_id'=>14),
                        array('name'=>'Tibati', 'division_id'=>14),
            
                //Faro-et-Déo
                        array('name'=>'Galim-Tignère', 'division_id'=>15),
                        array('name'=>'Mayo-Baléo', 'division_id'=>15),
                        array('name'=>'Tignere', 'division_id'=>15),
                        array('name'=>'Kontcha', 'division_id'=>15),
            
                //Mayo-Banyo
                        array('name'=>'Bankum', 'division_id'=>16),
                        array('name'=>'Banyo', 'division_id'=>16),
                        array('name'=>'Mayo-Darlé', 'division_id'=>16),
                
                //Mbéré
                        array('name'=>'Dir', 'division_id'=>17),
                        array('name'=>'Djohong', 'division_id'=>17),
                        array('name'=>'Meiganga', 'division_id'=>17),
                        array('name'=>'Ngaoui', 'division_id'=>17),
            
                //Vina		
                        array('name'=>'Belel', 'division_id'=>18),
                        array('name'=>'Mbe', 'division_id'=>18),
                        array('name'=>'Nganha', 'division_id'=>18),
                        array('name'=>'Ngaoundéré urban', 'division_id'=>18),		
                        array('name'=>'Ngaoundéré rural', 'division_id'=>18),
                        array('name'=>'Nyambaka', 'division_id'=>18),
                        array('name'=>'Martap', 'division_id'=>18),	
            
            //Center region
                //Haute-Sanaga
                        array('name'=>'Bibey', 'division_id'=>19),
                        array('name'=>'Lembe-Yezoum', 'division_id'=>19),
                        array('name'=>'Mbandjock', 'division_id'=>19),
                        array('name'=>'Minta', 'division_id'=>19),		
                        array('name'=>'Nanga-Eboko', 'division_id'=>19),
                        array('name'=>'Nkoteng', 'division_id'=>19),
                        array('name'=>'Nsem', 'division_id'=>19),	
            
                //Lekié
                        array('name'=>'Batchenga', 'division_id'=>20),
                        array('name'=>'Ebebda', 'division_id'=>20),
                        array('name'=>'Bibey', 'division_id'=>20),
                        array('name'=>'Elig-Mfomo', 'division_id'=>20),
                        array('name'=>'Evodoula', 'division_id'=>20),
                        array('name'=>'Lobo', 'division_id'=>20),		
                        array('name'=>'Monatélé', 'division_id'=>20),
                        array('name'=>'Obala', 'division_id'=>20),
                        array('name'=>'Okala', 'division_id'=>20),
                        array('name'=>'Saa', 'division_id'=>20),
            
                //Mbam-et-Inoubou
                        array('name'=>'Bafia', 'division_id'=>21),
                        array('name'=>'Bokito', 'division_id'=>21),
                        array('name'=>'Deuk', 'division_id'=>21),
                        array('name'=>'Kiiki', 'division_id'=>21),
                        array('name'=>'Kon-Yambetta', 'division_id'=>21),
                        array('name'=>'Lobo', 'division_id'=>21),		
                        array('name'=>'Makénéné', 'division_id'=>21),
                        array('name'=>'Ndikiniméki', 'division_id'=>21),
                        array('name'=>'Nitoukou', 'division_id'=>21),
                        array('name'=>'Ombessa', 'division_id'=>21),
            
                //Mbam-et-Kim
                        array('name'=>'Mbangassina', 'division_id'=>22),		
                        array('name'=>'Ngambè-Tikar', 'division_id'=>22),
                        array('name'=>'Ngoro', 'division_id'=>22),
                        array('name'=>'Ntui', 'division_id'=>22),
                        array('name'=>'Yoko', 'division_id'=>22),
            
                //Méfou-et-Afamba
                        array('name'=>'Afanloum', 'division_id'=>23),
                        array('name'=>'Awaé', 'division_id'=>23),
                        array('name'=>'Edzendouan', 'division_id'=>23),
                        array('name'=>'Esse', 'division_id'=>23),
                        array('name'=>'Mfou', 'division_id'=>23),		
                        array('name'=>'Nkolafamba', 'division_id'=>23),
                        array('name'=>'Olanguina', 'division_id'=>23),
                        array('name'=>'Soa', 'division_id'=>23),
            
                //Méfou-et-Akono
                        array('name'=>'Akono', 'division_id'=>24),
                        array('name'=>'Bikok', 'division_id'=>24),
                        array('name'=>'Mbankomo', 'division_id'=>24),
                        array('name'=>'Ngoumou', 'division_id'=>24),
            
                //Mfoundi
                        array('name'=>'Yaoundé', 'division_id'=>25),
            
                //Nyong-et-Kéllé
                        array('name'=>'Biyouha', 'division_id'=>26),
                        array('name'=>'Bondjock', 'division_id'=>26),
                        array('name'=>'Bot-Makak', 'division_id'=>26),
                        array('name'=>'Dibang', 'division_id'=>26),
                        array('name'=>'Eséka', 'division_id'=>26),
                        array('name'=>'Makak', 'division_id'=>26),		
                        array('name'=>'Matomb', 'division_id'=>26),
                        array('name'=>'Messondo', 'division_id'=>26),
                        array('name'=>'Ngog-Mapubi', 'division_id'=>26),
                        array('name'=>'Ngui-Bassal', 'division_id'=>26),
            
                //Nyong-et-Mfoumou
                        array('name'=>'Akonolinga', 'division_id'=>27),		
                        array('name'=>'Ayos', 'division_id'=>27),
                        array('name'=>'Endom', 'division_id'=>27),
                        array('name'=>'Kobdombo', 'division_id'=>27),
                        array('name'=>'Mengang', 'division_id'=>27),
            
                //Nyong-et-So'o
                        array('name'=>'Akoeman', 'division_id'=>28),		
                        array('name'=>'Dzeng', 'division_id'=>28),
                        array('name'=>'Mbalmayo', 'division_id'=>28),
                        array('name'=>'Mengueme', 'division_id'=>28),
                        array('name'=>'Ngomedzap', 'division_id'=>28),
                        array('name'=>'Nkolmetet', 'division_id'=>28),
            
            //East region
                //Boumba-et-Ngoko
                        array('name'=>'Gari-Gombo', 'division_id'=>29),
                        array('name'=>'Moloundou', 'division_id'=>29),
                        array('name'=>'Salapoumbé', 'division_id'=>29),
                        array('name'=>'Yokadouma', 'division_id'=>29),
            
                //Haut-Nyong
                        array('name'=>'Abong-Mbang', 'division_id'=>30),
                        array('name'=>'Angossas', 'division_id'=>30),
                        array('name'=>'Atok', 'division_id'=>30),
                        array('name'=>'Dimako', 'division_id'=>30),
                        array('name'=>'Doumaintang', 'division_id'=>30),
                        array('name'=>'Doumé', 'division_id'=>30),
                        array('name'=>'Lomié', 'division_id'=>30),
                        array('name'=>'Mboma', 'division_id'=>30),
                        array('name'=>'Messamena', 'division_id'=>30),
                        array('name'=>'Messok', 'division_id'=>30),		
                        array('name'=>'Mindourou', 'division_id'=>30),
                        array('name'=>'Ngoyla', 'division_id'=>30),
                        array('name'=>'Nguelemendouka', 'division_id'=>30),
                        array('name'=>'Somalomo', 'division_id'=>30),
            
                //Kadey
                        array('name'=>'Batouri', 'division_id'=>31),
                        array('name'=>'Kentzou', 'division_id'=>31),
                        array('name'=>'Kette', 'division_id'=>31),		
                        array('name'=>'Mbang', 'division_id'=>31),
                        array('name'=>'Ndelele', 'division_id'=>31),
                        array('name'=>'Nguelebok', 'division_id'=>31),
                        array('name'=>'Ouli', 'division_id'=>31),
            
                //Lom-et-Djerem
                        array('name'=>'Batouri', 'division_id'=>32),
                        array('name'=>'Kentzou', 'division_id'=>32),
                        array('name'=>'Kette', 'division_id'=>32),		
                        array('name'=>'Mbang', 'division_id'=>32),
                        array('name'=>'Ndelele', 'division_id'=>32),
                        array('name'=>'Nguelebok', 'division_id'=>32),
                        array('name'=>'Ouli', 'division_id'=>32),
            
            //Far north region.
                //Diamaré
                        array('name'=>'Bogo', 'division_id'=>33),
                        array('name'=>'Dargala', 'division_id'=>33),
                        array('name'=>'Gawaza', 'division_id'=>33),
                        array('name'=>'Maroua I urban', 'division_id'=>33),
                        array('name'=>'Maroua II urban', 'division_id'=>33),
                        array('name'=>'Maroua III urban', 'division_id'=>33),		
                        array('name'=>'Meri', 'division_id'=>33),
                        array('name'=>'Ndoukoula', 'division_id'=>33),
                        array('name'=>'Petté', 'division_id'=>33),
            
                //Logone-et-Chari
                        array('name'=>'Blangoua', 'division_id'=>34),
                        array('name'=>'Darak', 'division_id'=>34),
                        array('name'=>'Fotokol', 'division_id'=>34),
                        array('name'=>'Goulfey', 'division_id'=>34),
                        array('name'=>'Hile-Alifa', 'division_id'=>34),
                        array('name'=>'Kousséri', 'division_id'=>34),
                        array('name'=>'Logone-Birni', 'division_id'=>34),		
                        array('name'=>'Makary', 'division_id'=>34),
                        array('name'=>'Waza', 'division_id'=>34),
                        array('name'=>'Zina', 'division_id'=>34),
            
            
                //Mayo-Danay	
                        array('name'=>'Datcheka', 'division_id'=>35),
                        array('name'=>'Gobo', 'division_id'=>35),
                        array('name'=>'Gueme', 'division_id'=>35),
                        array('name'=>'Guere', 'division_id'=>35),
                        array('name'=>'Kai-Kai', 'division_id'=>35),
                        array('name'=>'Kalfou', 'division_id'=>35),
                        array('name'=>'Kay-Hay', 'division_id'=>35),
                        array('name'=>'Maga', 'division_id'=>35),
                        array('name'=>'Tchati-Bali', 'division_id'=>35),
                        array('name'=>'Wina', 'division_id'=>35),		
                        array('name'=>'Yagoua', 'division_id'=>35),
            
                //Mayo-Kani
                        array('name'=>'Dziguilao', 'division_id'=>36),
                        array('name'=>'Guidiguis', 'division_id'=>36),
                        array('name'=>'Kaélé', 'division_id'=>36),
                        array('name'=>'Mindif', 'division_id'=>36),
                        array('name'=>'Moulvoudaye', 'division_id'=>36),
                        array('name'=>'Moutourwa', 'division_id'=>36),
                        array('name'=>'Touloum', 'division_id'=>36),
            
            
                //Mayo-Sava
                        array('name'=>'Kolofata', 'division_id'=>37),
                        array('name'=>'Mora', 'division_id'=>37),		
                        array('name'=>'Tokombéré', 'division_id'=>37),
            
                //Mayo-Tsanaga
                        array('name'=>'Bourrha', 'division_id'=>38),
                        array('name'=>'Hina', 'division_id'=>38),
                        array('name'=>'Koza', 'division_id'=>38),
                        array('name'=>'Mogodé', 'division_id'=>38),
                        array('name'=>'Mokolo', 'division_id'=>38),
                        array('name'=>'Mozogo', 'division_id'=>38),
                        array('name'=>'Souledé-Roua', 'division_id'=>38),
            
            //littoral regoin
                //Moungo
                        array('name'=>'Baré', 'division_id'=>39),
                        array('name'=>'Bonaléa', 'division_id'=>39),
                        array('name'=>'Dibombari', 'division_id'=>39),
                        array('name'=>'Ebone', 'division_id'=>39),
                        array('name'=>'Loum', 'division_id'=>39),
                        array('name'=>'Manjo', 'division_id'=>39),
                        array('name'=>'Mbanga', 'division_id'=>39),
                        array('name'=>'Melong', 'division_id'=>39),
                        array('name'=>'Mombo', 'division_id'=>39),
                        array('name'=>'Nkongsamba 1', 'division_id'=>39),
                        array('name'=>'Nkongsamba 2', 'division_id'=>39),
                        array('name'=>'Nkongsamba 3', 'division_id'=>39),
                        array('name'=>'Penja', 'division_id'=>39),
            
                //Nkam	
                        array('name'=>'Ndobian', 'division_id'=>40),
                        array('name'=>'Nkondjock', 'division_id'=>40),
                        array('name'=>'Yabassi', 'division_id'=>40),
                        array('name'=>'Yingui', 'division_id'=>40),
            
                //Sanaga-Maritime			
                        array('name'=>'Dizangué', 'division_id'=>41),
                        array('name'=>'Dibamba', 'division_id'=>41),
                        array('name'=>'Édéa urban', 'division_id'=>41),
                        array('name'=>'Édéa rural', 'division_id'=>41),
                        array('name'=>'Massock', 'division_id'=>41),
                        array('name'=>'Mouanko', 'division_id'=>41),
                        array('name'=>'Ndom', 'division_id'=>41),
                        array('name'=>'Ngambe', 'division_id'=>41),
                        array('name'=>'Ngwei', 'division_id'=>41),
                        array('name'=>'Nyanon', 'division_id'=>41),
                        array('name'=>'Pouma', 'division_id'=>41),
            
                //Wouri		
                    
            //North subdivisions
                //Bénoué
                        array('name'=>'Barndaké', 'division_id'=>42),
                        array('name'=>'Bashéo', 'division_id'=>42),
                        array('name'=>'Bibemi', 'division_id'=>42),
                        array('name'=>'Dembo', 'division_id'=>42),
                        array('name'=>'Garoua urban', 'division_id'=>42),
                        array('name'=>'Garoua rural', 'division_id'=>42),
                        array('name'=>'Gashiga ', 'division_id'=>42),
                        array('name'=>'Lagdo', 'division_id'=>42),
                        array('name'=>'Ngong ', 'division_id'=>42),
                        array('name'=>'Pitoa', 'division_id'=>42),
                        array('name'=>'Touroua', 'division_id'=>42),
            
                //Faro
                        array('name'=>'Beka ', 'division_id'=>43),
                        array('name'=>'Poli urban', 'division_id'=>43),
                        array('name'=>'Poli rural', 'division_id'=>43),
            
                //Mayo-Louti
                        array('name'=>'Figuil', 'division_id'=>44),
                        array('name'=>'Guider', 'division_id'=>44),
                        array('name'=>'Mayo-Oulo', 'division_id'=>44),
            
                //Mayo-Rey
                        array('name'=>'Mandingring', 'division_id'=>45),
                        array('name'=>'Tcholliré', 'division_id'=>45),
                        array('name'=>'Touboro', 'division_id'=>45),
                        array('name'=>'Rey Bouba', 'division_id'=>45),
            
            //South subdivision
                //Dja-et-Lobo
                        array('name'=>'Bengbis', 'division_id'=>46),
                        array('name'=>'Djoum', 'division_id'=>46),
                        array('name'=>'Meyomessala', 'division_id'=>46),
                        array('name'=>'Meyomessi', 'division_id'=>46),
                        array('name'=>'Mintom', 'division_id'=>46),
                        array('name'=>'Oveng', 'division_id'=>46),
                        array('name'=>'Sangmélima urban', 'division_id'=>46),
                        array('name'=>'Sangmélima rural', 'division_id'=>46),
                        array('name'=>'Zoétélé', 'division_id'=>46),
            
                //Mvila
                        array('name'=>'Biwong-Bane', 'division_id'=>47),
                        array('name'=>'Biwong-Bulu', 'division_id'=>47),
                        array('name'=>'Ebolowa urban', 'division_id'=>47),
                        array('name'=>'Ebolowa rural', 'division_id'=>47),
                        array('name'=>'Efoulan', 'division_id'=>47),
                        array('name'=>'Mengong', 'division_id'=>47),
                        array('name'=>'Mvangane', 'division_id'=>47),
                        array('name'=>'Ngoulemakong', 'division_id'=>47),
            
                //Océan
                        array('name'=>'Akom II', 'division_id'=>48),
                        array('name'=>'Bipindi', 'division_id'=>48),
                        array('name'=>'Campo', 'division_id'=>48),
                        array('name'=>'Kribi urban', 'division_id'=>48),
                        array('name'=>'Kribi rural', 'division_id'=>48),
                        array('name'=>'Lokundje', 'division_id'=>48),
                        array('name'=>'Lolodorf', 'division_id'=>48),
                        array('name'=>'Mvengue', 'division_id'=>48),
                        array('name'=>'Niete', 'division_id'=>48),
            
                //Vallée-du-Ntem
                        array('name'=>'Ambam', 'division_id'=>49),
                        array('name'=>'Maan', 'division_id'=>49),
                        array('name'=>'Olamze', 'division_id'=>49),
                        array('name'=>'Kyé-Ossi', 'division_id'=>49),
            
            //South subdivision
                //Bamboutos
                        array('name'=>'Babadjou', 'division_id'=>50),
                        array('name'=>'Batcham', 'division_id'=>50),
                        array('name'=>'Galim', 'division_id'=>50),
                        array('name'=>'Mbouda', 'division_id'=>50),
            
                //Haut-Nkam
                        array('name'=>'Bana', 'division_id'=>51),
                        array('name'=>'Bafang urban', 'division_id'=>51),
                        array('name'=>'Bafang rural', 'division_id'=>51),
                        array('name'=>'Bandja', 'division_id'=>51),
                        array('name'=>'Banka', 'division_id'=>51),
                        array('name'=>'Kékem', 'division_id'=>51),
                        array('name'=>'Bakou', 'division_id'=>51),
                        array('name'=>'Batcheu', 'division_id'=>51),
            
                //Hauts-Plateaux
                        array('name'=>'Baham', 'division_id'=>52),
                        array('name'=>'Bamendjou', 'division_id'=>52),
                        array('name'=>'Bangou', 'division_id'=>52),
                        array('name'=>'Batié', 'division_id'=>52),
            
                //Koung-Khi
                        array('name'=>'Bayangam', 'division_id'=>53),
                        array('name'=>'Bandjoun', 'division_id'=>53),
                        array('name'=>'Demding', 'division_id'=>53),
            
                //Menoua
                        array('name'=>'Dschang urban', 'division_id'=>54),
                        array('name'=>'Dschang rural', 'division_id'=>54),
                        array('name'=>'Fokoué', 'division_id'=>54),
                        array('name'=>'Fongo-Tongo', 'division_id'=>54),
                        array('name'=>'Nkong-Zem', 'division_id'=>54),
                        array('name'=>'Penka-Michel', 'division_id'=>54),
                        array('name'=>'Santchou', 'division_id'=>54),
            
                //Mifi
                        array('name'=>'Bafoussam Urban', 'division_id'=>55),
                        array('name'=>'Bafoussam Rural', 'division_id'=>55),
                        array('name'=>'Bamougoum', 'division_id'=>55),
                        array('name'=>'Lafé-Baleng', 'division_id'=>55),
            
                //Ndé
                        array('name'=>'Bangangté', 'division_id'=>56),
                        array('name'=>'Bassamba', 'division_id'=>56),
                        array('name'=>'Bazou', 'division_id'=>56),
                        array('name'=>'Tonga', 'division_id'=>56),
                        array('name'=>'Balengou', 'division_id'=>56),
                        array('name'=>'Bamena', 'division_id'=>56),
                //Noun
                        array('name'=>'Bangourain', 'division_id'=>57),
                        array('name'=>'Foumban Urban', 'division_id'=>57),
                        array('name'=>'Foumbot', 'division_id'=>57),
                        array('name'=>'Kouoptamo', 'division_id'=>57),
                        array('name'=>'NKoutaba', 'division_id'=>57),
                        array('name'=>'Magba', 'division_id'=>57),
                        array('name'=>'Malentouen', 'division_id'=>57),
                        array('name'=>'Massangam', 'division_id'=>57),
                        array('name'=>'Njimom', 'division_id'=>57),
            );
            DB::table('sub_divisions')->insert($sub_divisions);
    }
}