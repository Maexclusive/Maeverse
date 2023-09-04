import {Sequelize} from "sequelize";
import db from "../config/database.js";
import ioc_table from "./ioc_tableModels.js";
 
const {DataTypes} = Sequelize;
 
const ip_ioc = db.define('ip_ioc',{
    id : {
        type: Sequelize.INTEGER,
        autoIncrement: true,
        primaryKey: true
      },
    ioc_name: DataTypes.STRING,
    ip: DataTypes.STRING,
},{
    freezeTableName:true
});

ip_ioc.belongsTo(ioc_table, { foreignKey: 'ioc_id' });

export default ip_ioc;
(async()=>{
    await db.sync();
})();