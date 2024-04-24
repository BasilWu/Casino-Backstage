// app.js
import express from 'express';
import bodyParser from 'body-parser';
import { Users } from './orm.js';

const app = express();
const port = 3000;

app.use(bodyParser.json());

app.post('/api/users', async (req, res) => {
    try {
        const newUser = await Users.create(req.body);
        res.status(201).json(newUser);
    } catch (error) {
        res.status(400).json({ error: error.message });
    }
});

app.listen(port, () => {
    console.log(`Server running at http://localhost:${port}`);
});
