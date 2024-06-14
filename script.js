const express = require('express');
const app = express();
const port = 5000;

const plataformas = [
  {
    nome: 
    link: 
    logo:
  },
  {
    nome: 
    link: 
    logo: 
  }
];

const ferramentas = [
  {
    nome: 
    link: 
    logo: 
  },
  {
    nome: 
    link: 
    logo: 
  }
];

app.get('/plataformas', (req, res) => {
  res.json(plataformas);
});

app.get('/ferramentas', (req, res) => {
  res.json(ferramentas);
});

app.listen(port, () => {
  console.log(`Backend running at http://localhost:${port}`);
});
