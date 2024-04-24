import Sequelize from 'sequelize';
import fs from 'fs';

const settings = JSON.parse(fs.readFileSync('settings.json', 'utf8'));

const sequelize = new Sequelize('Game-DB', 'root', settings.db_password, {
    host: '127.0.0.1',
    dialect: 'mysql',
    logging: false
});

const Users = sequelize.define('Users', {
    username: {
        type: Sequelize.STRING,
        allowNull: false
    },
    password: {
        type: Sequelize.STRING,
        allowNull: false
    }
}, {});

sequelize.sync().then(() => {
    console.log("已創建");
}).catch(error => {
    console.error("創建資料表錯誤:", error);
});

export { Purchase };

async function listAllTables() {
    try {
      const [results, metadata] = await sequelize.query("SHOW TABLES");
      const tableNames = results.map(row => Object.values(row)[0]); // 將結果轉換為純表名的陣列
      console.log("All tables:", tableNames);
    } catch (error) {
      console.error("Error listing tables:", error);
    }
  }
  
  listAllTables();