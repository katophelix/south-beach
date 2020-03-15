

<?php include("/var/www/vhosts/saltydog.com/dev.saltydog.com/Salty-Dog-Web2/daily-special/password_protect.php"); ?>


  
        <form action="action.php" method="POST">

            <p> Daily Specials</p>
            <p> If the restaurant is closed for the season or the daily special has not been created yet - just choose that restaurant and pick closed image or coming soon image</p>
            <select name="restaurant">
                <option value="">Pick a Restaurant</option>
                <option value="cafe">cafe</option>
                <option value="let">let</option>
                <option value="bluffdog">bluffdog</option>
                <option value="wreck">wreck</option>
            </select>

            <select name="chef">
                <option value="">Pick a chef</option>
                <option value="Chef Herb Britton">herb</option>
                <option value="Chef Tema Wilson">tema</option>
                <option value="Chef Jordan Bryan">jordan</option>
                <option value="Chef Terrell Scott">terrell</option>
                <option value="Chef Toro Cortes">Toro</option>
                <option value="Chef Julio Barragan">Julio</option>
                <option value="Chef Josh Gaskey">Josh</option>
                <option value="Chef Lupe Jimenez">Josh</option>
            </select>

            <select name="bio">
                <option value="">Pick a chef bio</option>
                <option value="Our Executive Chef Herb is a Salty Dog veteran with over 17 years of experience under his belt. He and his wife, Mel along with their son Cole (15) love lowcountry living. Chef Herb's favorite Salty Dog dish, as a Maryland native, is our Maryland Crab Cakes.">herb bio</option>
                <option value="Meet Tema! With 8 years of Salty Dog experience she knows the Seafood Pot Pie is a classic and also one of her favorite dishes. When she's not cooking up delicious food at the Salty Dog she enjoys time with her two daughters, Malayah (6) and Ahmari (9)">tema bio</option>
                <option value="With just 7 years of Salty Dog experience, Jordan is learning from some of the best! When he's not busy in the kitchen, he's hanging out with his 1 1/2 year old son, Jihan or eating his favorite dish the Jambalaya Pasta">jordan
                    bio</option>
                <option value="Terrell's been cooking up Salty Dog specials for 17 years and his favorite treat is our iconic Hushpuppies! Outside of work he keeps busy with 4 kids and 6 grandkids!">terrell
                    bio</option>
                <option value="Toro, a Salty Dog vet of 16 years, is a big fan of the Gumbo as well as hanging out with his two amazing daughters!
        ">toro bio</option>
                <option value=" Talk about Salty Dog experience! Julio has been a part of the Salty Dog team for 27 years! He loves our Maryland Crab Cakes as well as spending spare time with his wife, Patty and their boys, Oscar and Julio.
        ">julio bio</option>
           
            <option value=" josh gaskey bio. ">josh bio</option>
            <option value=" lupe gaskey bio. ">lupe bio</option>
                </select>

            <select name="image">
                <option value="">Pick a chef image or closed for season image or coming soon image</option>
                <option value="images/herb.jpg">herb image</option>
                <option value="images/tema.jpg">tema image</option>
                <option value="images/jordan.jpg">jordan image</option>
                <option value="images/terrell.jpg">terrell image</option>
                <option value="images/toro.jpg">toro image</option>
                <option value="images/julio.jpg">julio image</option>
                <option value="images/josh.jpg">josh image</option>
                <option value="images/lupe.jpg">lupe image</option>
                <option value="images/CLOSED_forseason-1.jpg">Closed for Season</option>
                <option value="images/DailySpecial_comingsoon-1.jpg">Coming soon</option>
            </select>
            <input name="special_name" type="text" placeholder="Enter Special name" />
            <input name="special_descr" type="text" placeholder="Enter special description" />
            <input name="child_name" type="text" placeholder="Enter kid's special name" />
            <input name="child_descr" type="text" placeholder="Enter kid's special description" />
            <input type="submit" name="submit" value="Save Data">
        </form>
    </div>