import User from "../models/ioc_tableModels.js";
 
export const getioctable = async(req, res) =>{
    try {
        const response = await User.findAll();
        res.status(200).json(response);
    } catch (error) {
        console.log(error.message);
    }
}



export const insertioctable = async(req, res) =>{
    try {
        const response = await User.create({
            ioc_id: 3,
            sha_256: "a95449f7c7c1ea5359bd76f25f57b89802d94f649ba059b910d8e46d9a914fcf"
        },{fields: ['ioc_id','sha_256']});
        res.status(200).json(response);
    } catch (error) {
        console.log(error.message);
    }
}
