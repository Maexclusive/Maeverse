import {Sequelize} from "sequelize";
import db from "../config/database.js";
 
const {DataTypes} = Sequelize;
 
const ioc_table = db.define('ioc_table',{
    ioc_id : {
    type: Sequelize.INTEGER,
    autoIncrement: true,
    primaryKey: true
  },
    sha_256: {
        type: DataTypes.STRING,
        allowNull: true,
        unique: true
    },
    url: {
        type: DataTypes.STRING,
        allowNull: true,
        unique: true
    },
    ip: {
        type: DataTypes.STRING,
        allowNull: true,
        unique: true
    },
    domain: {
        type: DataTypes.STRING,
        allowNull: true,
        unique: true
    },
},{
    freezeTableName:true
});
 
export default ioc_table;
 
(async()=>{
    await db.sync();
})();