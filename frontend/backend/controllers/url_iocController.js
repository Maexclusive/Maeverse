import User from "../models/url_iocModels.js";
 
export const geturlioc = async(req, res) =>{
    try {
        const response = await User.findAll();
        res.status(200).json(response);
    } catch (error) {
        console.log(error.message);
    }
}
