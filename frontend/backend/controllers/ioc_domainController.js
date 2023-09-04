import User from "../models/ioc_domainModels.js";
 
export const getioc_domain = async(req, res) =>{
    try {
        const response = await User.findAll();
        res.status(200).json(response);
    } catch (error) {
        console.log(error.message);
    }
}
