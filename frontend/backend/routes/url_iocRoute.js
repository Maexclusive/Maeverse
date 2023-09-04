import express from "express";
import {
    geturlioc 
} from "../controllers/url_iocController.js";
 
const router = express.Router();
 
router.get('/url_ioc', geturlioc);
 
export default router;