#!/usr/bin/env node

const express = require("express");
const app = express();
const port = 8080;

app.get("/", (request, response) => {
  response.send("<html><body><h1>Me cago en la puta</h1></body></html>");
});
app.get("/pagina2.html", (request, response) => {
  let now = new Date();
  response.send(`${now}`);
});
app.use("/html", express.static(__dirname + "/html"));

app.listen(port, (err) => {
  console.log(`server is listening on ${port}`);
});
