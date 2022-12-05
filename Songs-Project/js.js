
/*---------------------JS for next/prev img--------------------------*/
let imgSrc = [
    "images/mic.jpg", 
    "images/mixer.jpg", 
    "images/mixer2.jpg", 
    "images/studio.jpg", 
    "images/vinyl.jpg", 
    "images/vinyl2.jpg"];

let imgCap = [
    "Artist: <h2>Bruno Mars</h2> My favourite song by him right now is <b>Smoking out the Wsindow</b>, I would recommend a listen. Some info about Bruno Mars: Peter Gene Hernandez (born October 8, 1985), known professionally as Bruno Mars, is an American singer, songwriter, and record producer. He is known for his stage performances, retro showmanship, and for performing in a wide range of musical styles, including pop, R&B, funk, soul, reggae, disco, and rock. Mars is accompanied by his band, the Hooligans, who play a variety of instruments, and also serve as backup singers and dancers.<br><br> <a href = https://en.wikipedia.org/wiki/Bruno_Mars>Wiki</a>", 
    "Artist: <h2>Twice</h2> My favourite song by them has to be <b>Basics</b>, so swag very nice. Please listen to it, i will be very happy. Some info about Twice: Twice is a South Korean girl group formed by JYP Entertainment. The group is composed of nine members: Nayeon, Jeongyeon, Momo, Sana, Jihyo, Mina, Dahyun, Chaeyoung, and Tzuyu. Twice was formed under the television program Sixteen (2015) and debuted on October 20, 2015, with the extended play (EP) The Story Begins. <br><br> <a href = https://en.wikipedia.org/wiki/Twice>Wiki</a>", 
    "Artist: <h2>Beabadoobee</h2> My favourite song by her right now is <b>The Perfect Pair</b>, you must listen to it or else. Some info about Beabadoobee: Beatrice Kristi Laus (born 3 June 2000), known professionally as beabadoobee, is a Filipino-British singer-songwriter. From 2018 to 2021, she released five extended plays under the independent label Dirty Hit: Lice (2018), Patched Up (2018), Loveworm (2019), Space Cadet (2019) and Our Extended Play (2021). <br><br> <a href = https://en.wikipedia.org/wiki/Beabadoobee>Wiki</a>", 
    "Artist: <h2>Joji</h2> My favourite song by him right now is <b>Slow Dancing in the Dark</b>, I would recommend a listen. Some info about Joji: George Kusunoki Miller (ジョージ・楠木・ミラー, Jōji Kusunoki Mirā, born 18 September 1992) , known professionally as Joji and formerly as Filthy Frank and Pink Guy, is a Japanese singer-songwriter, rapper, comedian, and former YouTuber. Miller's music has been described as a mix between R&B, lo-fi, and trip hop. <br><br> <a href = https://en.wikipedia.org/wiki/Joji_(musician)>Wiki</a>",  
    "Artist: <h2>King Gizzard and the Lizard Wizard</h2> My favourite song by him right now is <b>Magma</b>, its really good theres a lot of genres in the single song. Some info about them: King Gizzard & the Lizard Wizard are an Australian rock band formed in 2010 in Melbourne, Victoria.The band's current lineup consists of Stu Mackenzie, Ambrose Kenny-Smith, Cook Craig, Joey Walker, Lucas Harwood and Michael Cavanagh. They are known for exploring multiple genres, staging energetic live shows and building a prolific discography. <br><br> <a href = https://en.wikipedia.org/wiki/King_Gizzard_%26_the_Lizard_Wizard>Wiki</a>", 
    "Artist: <h2>Gfriend</h2> My favourite song by him right now is <b>Mago</b>, I would recommend a listen. They disbanded im so sad. GFriend (stylized in all caps; Korean: 여자친구; RR: Yeojachingu) was a South Korean girl group formed by Source Music in 2015. The group consisted of six members: Sowon, Yerin, Eunha, Yuju, SinB, and Umji. They debuted with the extended play Season of Glass on January 15, 2015 and won several female rookie awards, garnering momentum early on despite being from a small company. <br><br><a href = https://en.wikipedia.org/wiki/GFriend>Wiki</a>"];

let i = 0;
/*Next image function */
function nextImage(){
    if(i+2>imgSrc.length){
        i=0;
    }else{
        i++;
    }
    document.getElementById("song").src = imgSrc[i];
    document.getElementById("imgCaption").innerHTML = imgCap[i];
    console.log("Test");
}
/* Previous image function*/
function prevImage(){
    if(i-1<0){
        i=imgSrc.length-1;
    }else{
        i--;
    }
    document.getElementById("song").src = imgSrc[i];
    document.getElementById("imgCaption").innerHTML = imgCap[i];
    console.log("Test");
}
