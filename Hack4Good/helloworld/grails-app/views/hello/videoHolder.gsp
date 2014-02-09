<%--
  Created by IntelliJ IDEA.
  User: Bri
  Date: 08/02/2014
  Time: 16:54
--%>

<%@ page contentType="text/html;charset=UTF-8" %>
<html>
<head>
    <meta name="layout" content="main"/>
    <title>Video</title>
</head>

<body>
<div id="full">
    <div id="videoBorder" class="center">

    </div>
<div id="inputFormDiv" class="center">

    <form action="" id="selecitonForm">
        <input type="radio" name="selections">     Selection 1<br/>
        <input type="radio" name="selections">     Selection 2<br/>
        <input type="radio" name="selections">     Selection 3<br/>
        <input type="radio" name="selections">     Enter Your Own<br/>
        <br/>
        <button type="submit" onclick="">Submit</button>
    </form>

<form id="videoTextInput">
    <label id="inputTextLabel">Enter your text here:</label><br/>
<input type="text" autofocus name="videoInput" id="videoInput">
</div>
</form>
</div>
</body>
</html>