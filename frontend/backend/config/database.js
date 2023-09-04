import {Sequelize} from "sequelize";

const db = new Sequelize('ioc_akasata','postgres','FuckingLife311',{
    host: '172.16.0.107',
    dialect: 'postgres'
});

export default db;