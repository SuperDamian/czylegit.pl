<div id="header">
    <div id="header_lewo">
        <img src="../media/3.png" id="logo_header">
        <form action="" method="get">
            <input type="image" src="media/5.png" id="lupa">
            <input type="text" name="szukaj" placeholder="znajdź sprzedawcę" id="szukaj">
        </form>
    </div>
    <div id="header_prawo">
        <div id="zweryfikuj_sie">
            status: niezweryfikowany <img src="../media/8.png" style="height: 12px; float: right; margin-top: 4px; margin-right: 9px;">
        </div>
        <img src="../media/7.png" id="pasek">
        <a href="ustawienia.php"><img src="../media/6.png" id="profilowe"></a>
    </div>
</div>

<style>
    #header
    {
        width: 100%;
        height: 80px;
        background-color: #ffffff;
        position: fixed;
        top: 0px;
        right: 0px;
        left: 0px;
        border-bottom: solid 1px #838383;
        box-shadow: 2px 2px 6px 0px rgba(125,125,125,0.75);
    }
    #header_lewo
    {
        width: 45%;
        height: 80px;
        float: left;
    }
    #logo_header
    {
        height: 50px;
        float: left;
        margin-top: 12px;
        margin-left: 50px;
    }
    #header_prawo
    {

    }
    #zweryfikuj_sie
    {
        width: 200px;
        height: 20px;
        float: left;
        margin-top: 30px;
    }
    #profilowe
    {
        width: 58px;
        border: 1px solid #8c8c8c;
        float: right;
        margin-top: 11px;
        box-sizing: border-box;
    }
    #pasek
    {
        height: 58px;
        float: right;
        margin-top: 11px;
        margin-left: 2px;
        margin-right: 10px;
    }
    #szukaj
    {
        width: 250px;
        height: 30px;
        float: right;
        border: 1px solid #686868;
        border-radius: 20px;
        padding-left: 15px;
        margin-top: 26px;
        margin-right: 20px;
    }
    #lupa 
    {
        width: 22px;
        float: right;
        margin-top: 30px;
    }
    #header_prawo
    {
        width: 40%;
        height: 80px;
        margin-right: 50px;
        float: right;
    }
</style>