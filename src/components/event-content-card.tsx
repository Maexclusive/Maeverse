import Image from "next/image";
import {
  Typography,
  Card,
  CardHeader,
  CardBody,
  Avatar,
  CardFooter,
  Button,
} from "@material-tailwind/react";

interface EventContentCardProps {
  title: string;
  des: string;
  name: string;
  link: string;
  model_toko: string;
  img: string;
}
export function EventContentCard({
  title,
  des,
  name,
  link,
  model_toko,
  img,
}: EventContentCardProps) {
  return (
    <Card placeholder="CardList" className=" mt-6 w-96 items-center lg:w-full lg:flex-row">
      <CardHeader placeholder="cardHeader" floated={false} shadow={false} className="flex h-auto max-w-[28rem] shrink-0 justify-center w-56">
         <Image width={240} height={240} src={img} alt="testimonial image" className="rounded-full object-cover object-center w-full"/>
      </CardHeader>
      <CardBody placeholder="">
        <CardBody placeholder="cardBody" className="col-span-full lg:col-span-3">
        <Typography placeholder="model toko" variant="h6" color="blue-gray" className="mb-4">
          {model_toko}
        </Typography>

        <Typography placeholder="judul" variant="h2" color="blue-gray" className="mb-4 font-medium">
          {title}
        </Typography>

        <Typography placeholder="deskripsi" className="mb-12 md:w-8/12 font-medium !text-gray-500">
          {des}
        </Typography>
      </CardBody>
      <CardFooter placeholder="" className="grid grid-flow-col auto-cols-max pt-0 gap-4">
        <Avatar placeholder="avatar" className="object-cover" variant="square" src="/logos/instagram-logo.png" alt="instagram" size="lg" />
          <div className="grid grid-flow-row auto-rows-max ">
            <Typography placeholder="nama" variant="h6" color="blue-gray" className="mb-0.5">
              {name}
            </Typography>

            <Typography placeholder="link" variant="small" className="font-normal !text-blue-500 w-56 lg:w-full truncate ">
              {link}
            </Typography>
          </div>
      </CardFooter>
      </CardBody>
       
    </Card>

    // // <div className=" container flex items-center gap-4">

    //       <Avatar placeholder="avatar" className="object-cover" variant="square" src="/logos/instagram-logo.png" alt="instagram" size="lg" />
    //       <div className="container flex flex-col">
    //         <Typography placeholder="nama" variant="h6" color="blue-gray" className="mb-0.5">
    //           {name}
    //         </Typography>

    //         <Typography placeholder="link" variant="small" className="font-normal !text-blue-500 truncate ">
    //           {link}
    //         </Typography>
    //       </div>
    //     </div>

    // <Card placeholder="card" color="transparent" shadow={false} className="lg:!flex-row mb-10 lg:items-center">
    //   <CardHeader placeholder="cardHeader" floated={false} shadow={false} className="h-auto max-w-[28rem] shrink-0 justify-content-center">
    //     <Image width={240} height={240} src={img} alt="testimonial image" className="rounded-full object-cover object-center"/>
    //   </CardHeader>
     
    // </Card>
  );
}

export default EventContentCard;
