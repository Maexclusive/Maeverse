import express from "express";
import {
    getioctable,insertioctable 
} from "../controllers/ioc_tableController.js";
 
const router = express.Router();
 
router.get('/ioc_table', getioctable);
router.get('/insert_ioc_table', insertioctable);
 
export default router;