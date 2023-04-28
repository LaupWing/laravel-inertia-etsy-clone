interface Base {
   created_at: Date
   updated_at: Date
}

export interface Shop extends Base {
   description: string
   id: number
   profile_url: string
   ratings: Rating[]
}

export interface Rating extends Base {
   id: number
   shop_id: number
   user_id: number
   rating: number
}