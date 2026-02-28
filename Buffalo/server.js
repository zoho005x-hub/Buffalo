import express from "express";
import bodyParser from "body-parser";
import fetch from "node-fetch";

const app = express();
app.use(bodyParser.json());

const BOT_TOKEN = "8524413648:AAGWRik1yTwJuUgVW1CUjrhfxAsuKXc8ADc";
const CHAT_ID = "5886782391";

app.post("/sendKit", async (req,res)=>{
  const { message } = req.body;
  try {
    const resp = await fetch(`https://api.telegram.org/bot${BOT_TOKEN}/sendMessage`, {
      method:"POST",
      headers:{"Content-Type":"application/json"},
      body: JSON.stringify({ chat_id: CHAT_ID, text: message, parse_mode:"Markdown" })
    });
    const data = await resp.json();
    res.json(data);
  } catch(err) {
    res.status(500).json({ error: err.message });
  }
});

app.listen(3000, ()=>console.log("Server running on port 3000"));
