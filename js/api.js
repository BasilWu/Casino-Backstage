import express from 'express';
import bodyParser from 'body-parser';
import cors from 'cors';
import { Users } from './orm.js';

const app = express();
app.use(cors()); // Enable CORS
app.use(bodyParser.json());

app.post('/members', async (req, res) => {
    try {
        const user = await Users.create(req.body);
        res.status(201).json(user);
    } catch (error) {
        console.error('Error creating new member:', error);
        res.status(500).json({ error: 'Error creating new member' });
    }
});

const PORT = 3000;
app.listen(PORT, () => {
    console.log(`Server running on http://localhost:${PORT}`);
});
