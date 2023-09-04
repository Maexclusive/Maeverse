import express from "express";
import cors from "cors";
import url_ioc from "./routes/url_iocRoute.js";
import ioc_table from "./routes/ioc_tableRoute.js";
import ip_ioc from "./routes/ip_iocRoute.js";
import ioc_sha265 from "./routes/ioc_sha265Route.js";
import ioc_domain from "./routes/ioc_domainRoute.js"


const app = express();


app.use(cors());
app.use(express.json());
app.use(ip_ioc);
app.use(ioc_sha265);
app.use(url_ioc);
app.use(ioc_domain);
app.use(ioc_table);



app.listen(5000, ()=> console.log('server berjalan'));