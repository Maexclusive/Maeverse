import Image from "next/image";
import {
  Typography,
  Card,
  CardHeader,
  CardBody,
  Avatar,
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
    <Card placeholder="card" color="transparent" shadow={false} className="lg:!flex-row mb-10 lg:items-center">
      <CardHeader placeholder="cardHeader" floated={false} shadow={false} className="h-auto max-w-[28rem] shrink-0 justify-content-center">
        <Image width={240} height={240} src={img} alt="testimonial image" className="rounded-full object-cover object-center"/>
      </CardHeader>
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

        <div className="flex items-center gap-4">

          <Avatar placeholder="logo-instagram" className="object-cover" variant="square" src="/logos/instagram-logo.png" alt="instagram" size="lg" />
          <div>

            <Typography placeholder="nama" variant="h6" color="blue-gray" className="mb-0.5">
              {name}
            </Typography>

            <Typography placeholder="link" variant="small" className="font-normal !text-blue-500">
              <a href={link}>{link}</a>
            </Typography>

          </div>
        </div>
      </CardBody>
    </Card>
  );
}

export default EventContentCard;
