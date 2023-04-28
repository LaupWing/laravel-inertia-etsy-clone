import { Page } from "@inertiajs/core"
import { AxiosInstance } from "axios"
import ziggyRoute, { Config as ZiggyRoute} from "ziggy-js"

declare global {
   interface Window {
      axios: AxiosInstance
   }

   var route: typeof ziggyRoute
   var Ziggy: ZiggyRoute
}

declare module "vue" {
   interface ComponentCustomProperties {
      route: typeof ziggyRoute;
   }
}

declare module "@inertia/core" {
   interface PageProps extends Page<PageProps> {
      user: inertia.User
   }
}