import User from "../models/ioc_sha256Models.js";
 
export const getioc_sha256 = async(req, res) =>{
    try {
        const response = await User.findAll();
        res.status(200).json(response);
    } catch (error) {
        console.log(error.message);
    }
}
