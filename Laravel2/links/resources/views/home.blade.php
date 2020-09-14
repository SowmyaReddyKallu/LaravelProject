<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Laravel</title>
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
      <!-- Styles -->
      <style>
         html, body {
         background-color: #fff;
         color: #636b6f;
         font-family: 'Nunito', sans-serif;
         font-weight: 200;
         height: 100vh;
         margin: 0;
         }
         .full-height {
         height: 100vh;
         }
         .flex-center {
         align-items: center;
         display: flex;
         justify-content: center;
         }
         .position-ref {
         position: relative;
         }
         .top-right {
         position: absolute;
         right: 10px;
         top: 18px;
         }
         .content {
         text-align: center;
         }
         .title {
         font-size: 84px;
         }
         .links > a {
         color: #636b6f;
         padding: 0 25px;
         font-size: 13px;
         font-weight: 600;
         letter-spacing: .1rem;
         text-decoration: none;
         text-transform: uppercase;
         }
         .m-b-md {
         margin-bottom: 30px;
         }
      <style>
         .tableData {
         font-family: arial, sans-serif;
         border-collapse: collapse;
         width: 100%;
         }
         .tableData td, th {
         border: 1px solid #dddddd;
         text-align: left;
         padding: 8px;
         }
         .tableData th {
         border: 1px solid #dddddd;
         text-align: left;
         padding: 8px;
         font-weight:bold;
         background-color:skyblue;
         }
         .tableData td {
            font-size: small;
         }
         .tableData tr:nth-child(even) {
         background-color: #dddddd;
         }
      </style>
      </style>
   </head>
   <body>
      <table style="width:100%;border:1px solid brown;padding: 1px;">
         <tr>
            <td colspan="4" style="background-color:skyblue; font-weight:bold;">
               Search
            </td>
         </tr>
         <tr>
            <td>
               Name
            </td>
            <td>
               <input name="txtName" id="txtName" type='text' />
            </td>
         <tr>
            <td>
               Description
            </td>
            <td>
               <input name="txtDescription" id="txtDescription" type='text' />
            </td>
         </tr>
         <tr>
            <td colspan="4" style="text-align:right;">
               <input type='button' id='Search' name='Search' value='Search'> &nbsp; <input type='button' id='Reset' name='Reset'value='Reset'>
            </td>
      </table>
      <hr/>
      <table class="tableData" style="width:100%;border:1px solid skyblue;border-collapse:collapse;padding: 1px;">
         <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Description</th>
         </tr>
         @foreach ($sermons as $sermon) 
         <tr>
            <td>
               <span> {{ $sermon->id }} </spans>
            </td>
            <td>
               <span> {{ $sermon->title }} </spans>
            </td>
            <td>
               <span> {{ $sermon->description }} </spans>
            </td>
         </tr>
         @endforeach
      </table>
   </body>
</html>