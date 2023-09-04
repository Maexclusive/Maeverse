import {Sequelize} from "sequelize";
import db from "../config/database.js";
import ioc_table from "./ioc_tableModels.js";
 
const {DataTypes} = Sequelize;
 
const ioc_sha265 = db.define('sha256_ioc',{
    id : {
        type: Sequelize.INTEGER,
        autoIncrement: true,
        primaryKey: true
      },
    ioc_name: DataTypes.STRING,
    sha_265: DataTypes.STRING,
},{
    freezeTableName:true
});

ioc_sha265.belongsTo(ioc_table, { foreignKey: 'ioc_id' });

export default ioc_sha265;
(async()=>{
    await db.sync();
})();