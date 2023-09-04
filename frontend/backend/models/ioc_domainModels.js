import {Sequelize} from "sequelize";
import db from "../config/database.js";
import ioc_table from "./ioc_tableModels.js";
 
const {DataTypes} = Sequelize;
 
const ioc_domain = db.define('domain_ioc',{
    id : {
        type: Sequelize.INTEGER,
        autoIncrement: true,
        primaryKey: true
      },
    ioc_name: DataTypes.STRING,
    domain: DataTypes.STRING,
},{
    freezeTableName:true
});

ioc_domain.belongsTo(ioc_table, { foreignKey: 'ioc_id' });

export default ioc_domain;
(async()=>{
    await db.sync();
})();