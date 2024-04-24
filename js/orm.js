import Sequelize from 'sequelize';
import fs from 'fs';

// 加载并解析 settings.json 配置文件
const settings = JSON.parse(fs.readFileSync('settings.json', 'utf8'));

// 初始化 Sequelize 实例
const sequelize = new Sequelize('Game-DB', 'root', settings.db_password, {
    host: '127.0.0.1',
    dialect: 'mysql',
    logging: false
});

// 定义 Users 模型
export const Users = sequelize.define('Users', {
    UserId: {
        type: Sequelize.INTEGER,
        autoIncrement: true,
        primaryKey: true
    },
    Username: {
        type: Sequelize.STRING,
        allowNull: false,
        unique: true
    },
    Password: {
        type: Sequelize.STRING,
        allowNull: false
    },
    FullName: Sequelize.STRING,
    Status: {
        type: Sequelize.TINYINT,
        defaultValue: 1
    },
    LastLoginTime: Sequelize.DATE,
    LastLoginIP: Sequelize.STRING,
    Phone: Sequelize.STRING,
    LineId: Sequelize.STRING,
    MemberLevel: {
        type: Sequelize.INTEGER,
        defaultValue: 0
    },
    IsValid: {
        type: Sequelize.BOOLEAN,
        defaultValue: false
    },
    Memo: Sequelize.TEXT
}, {});

// 定义 Groups 模型
export const Groups = sequelize.define('Groups', {
    GroupId: {
        type: Sequelize.INTEGER,
        autoIncrement: true,
        primaryKey: true
    },
    GroupName: {
        type: Sequelize.STRING,
        allowNull: false
    }
}, {});

// 定义 Permissions 模型
export const Permissions = sequelize.define('Permissions', {
    PermissionId: {
        type: Sequelize.INTEGER,
        autoIncrement: true,
        primaryKey: true
    },
    PermissionName: {
        type: Sequelize.STRING,
        allowNull: false
    },
    Description: Sequelize.TEXT
}, {});

// 定义 GroupPermissions 模型
export const GroupPermissions = sequelize.define('GroupPermissions', {
    GroupPermissionId: {
        type: Sequelize.INTEGER,
        autoIncrement: true,
        primaryKey: true
    },
    GroupId: {
        type: Sequelize.INTEGER,
        references: {
            model: 'Groups',
            key: 'GroupId'
        }
    },
    PermissionId: {
        type: Sequelize.INTEGER,
        references: {
            model: 'Permissions',
            key: 'PermissionId'
        }
    }
}, {});

// 定义 UserGroups 模型
export const UserGroups = sequelize.define('UserGroups', {
    UserGroupId: {
        type: Sequelize.INTEGER,
        autoIncrement: true,
        primaryKey: true
    },
    UserId: {
        type: Sequelize.INTEGER,
        references: {
            model: 'Users',
            key: 'UserId'
        }
    },
    GroupId: {
        type: Sequelize.INTEGER,
        references: {
            model: 'Groups',
            key: 'GroupId'
        }
    }
}, {});

// 建立模型之间的关联
Groups.hasMany(GroupPermissions, {foreignKey: 'GroupId'});
Permissions.hasMany(GroupPermissions, {foreignKey: 'PermissionId'});
Users.hasMany(UserGroups, {foreignKey: 'UserId'});
Groups.hasMany(UserGroups, {foreignKey: 'GroupId'});
/*
// 同步模型到数据库
sequelize.sync({force: false}).then(() => {
    console.log("所有表已成功同步");
}).catch(error => {
    console.error("同步数据表时发生错误:", error);
});
*/