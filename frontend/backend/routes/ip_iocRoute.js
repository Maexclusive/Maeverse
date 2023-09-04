import express from "express";
import {
    getipioc 
} from "../controllers/ip_iocController.js";
 
const router = express.Router();
 
router.get('/ip_ioc', getipioc);
 
export default router;