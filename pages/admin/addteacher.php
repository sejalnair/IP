<!DOCTYPE html>
<html>
<head>
<style>
*{
    box-sizing: border-box;
}
body{
    margin: unset;
    
}
div{
    width: 100%;
    height:100%;
    padding:50px;
    /* background: linear-gradient(to bottom, #92597c 0%,#7e2b5a 50%,#910951 55%,#720245 100%); */
    border: solid 2px #720245;
    background: #e7b3ff;
}
label{
    margin-right: 15px;
    color: #19010f;
}
input ,select{
    margin-right: 20px;
    width:20%;
    height: 32px;
    padding: 5px;
    color: #19010f;
}
select{
    color:unset;
}
#submit,#reset{
    background:#720245;
    color:white;
}
</style>
</head>
<body>
    <div>
        <form>
            <label>Name :</label>
            <input type="text" placeholder="First name">
            <input type="text" placeholder="Middle name">
            <input type="text" placeholder="Last name">
            <br>
            <br>
            <label>Year :</label>
            <select>
                <option value="FirstYear">First Year</option>
                <option value="SecondYear">Second Year</option>
                <option value="ThirdYear">Third Year</option>
                <option value="FourthYear">Fourth Year</option>
            </select>
            <br><br>
            <label>Class :</label>
            <select>
                <option value="1">D10</option>
            </select>
            <br>
            <br>

            <input type="submit" value="Submit" id="submit">
            <input type="reset" value="Reset" id="reset">
        </form>
    </div>
</body>
</html>