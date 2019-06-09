<html>
    <head>
        <title>Оформление заявки</title>
    </head>
    <body>
        <h1>Оформление заявки</h1>
        <div style="width: 300px; float:left" >
           <p>Краткое описание заявки</p> 
        <input name="reqname" type=text placeholder="краткое описание заявки" style="width:300px">
            <p>Наименование объекта</p>
        <input name="objname" type=text placeholder="Наименование объекта"style="width:300px">
            <p>Наименование аппаратуры</p>
        <input name="appname" type=text placeholder="Наименование аппаратуры"style="width:300px">
            <p>&nbsp&nbsp&nbsp&nbspДата&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspВремя</p>
            <p>С &nbsp&nbsp<input type="text" name="dataday" placeholder="День" style="width: 30px">
            <input type="text" name="datamonth" placeholder="Мес" style="width: 30px">
            <input type="text" name="datayear" placeholder="Год" style="width: 60px">&nbsp&nbsp   
            <input type="text" name="datahour" placeholder="Час" style="width: 30px"> &nbsp:&nbsp
                <input type="text" name="datamin" placeholder="Мин" style="width: 30px">
            </p>
            <br>
            <p>По<input type="text" name="dataday1" placeholder="День" style="width: 30px">
            <input type="text" name="datamonth1" placeholder="Мес" style="width: 30px">
            <input type="text" name="datayear1" placeholder="Год" style="width: 60px">&nbsp&nbsp   
            <input type="text" name="datahour1" placeholder="Час" style="width: 30px"> &nbsp:&nbsp
                <input type="text" name="datamin1" placeholder="Мин" style="width: 30px">
            </p>
            <input type="checkbox" name="closed">Закрыта
            <p name=ifclosed style="visibility: hidden"><input type="text" name="dataday2" placeholder="День" style="width: 30px">
            <input type="text" name="datamonth2" placeholder="Мес" style="width: 30px">
            <input type="text" name="datayear2" placeholder="Год" style="width: 60px">&nbsp&nbsp   
            <input type="text" name="datahour2" placeholder="Час" style="width: 30px"> &nbsp:&nbsp
                <input type="text" name="datamin2" placeholder="Мин" style="width: 30px">
                <br><br>
        </div>
        
        <div style="width: 300px; float:left; margin-left: 30px">
            <p>Включение на ночь</p>
            <select name=onnight style="width:200px">
                <option value="onnight">С включением на ночь</option>
                <option value="offnight">Без включения на ночь</option>
            </select>
            <p>Тип заявки</p>
            <select name=onnight style="width:200px">
                <option value="onnight">Аварийная</option>
                <option value="offnight">Плановая</option>
                <option value="offnight">Внеплановая</option>
                <option value="offnight">Неотложная</option>
            </select>
            <p>Аварийная готовность</p>
            <input type=text name=timereq placeholder="Аварийная готовность" style="width:200px">
            <p>Ответственный</p>
            <select name="respons" style="width:200px">
                <option value="Старостенко В.М.">Старостенко В.М.</option>
                 <option value="Яковченко А.Н.">Яковченко А.Н.</option>
                <option value="Петрович В.Д.">Петрович В.Д.</option>
                <option value="Михалко Г.Е.">Михалко Г.Е.</option>
                <option value="Лозейко А.В.">Лозейко А.В.</option>
                <option value="Горох И.А.">Горох И.А.</option>
                <option value="Грицук А.А.">Петрович В.Д.</option>    
            </select>
            <p>Подписал</p>
            <select name="write" style="width:200px">
                <option value="Клопов Д.Т.">Клопов Д.Т.</option>
                 <option value="Лавринович В.С.">Лавринович В.С.</option>
                <option value="Лозейко А.В.">Лозейко А.В.</option>
                <option value="Ващенко А.И.">Ващенко А.И.</option>
            </select>
            <p>Передал дежурный</p>
            <select name="write" style="width:200px">
                <option value="Клопов Д.Т.">Клопов Д.Т.</option>
                 <option value="Лавринович В.С.">Лавринович В.С.</option>
                <option value="Лозейко А.В.">Лозейко А.В.</option>
                <option value="Ващенко А.И.">Ващенко А.И.</option>
            </select>
            
            
            <p><input type=button style=" clear:both; width:200px; height: 40px; margin-top:120px" name=require value="Оформить"></p> 
        </div>        
    </body>
</html>