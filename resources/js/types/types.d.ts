interface Base {
   created_at: Date
   updated_at: Date
}

export interface Shop extends Base {
   name: string
   description: string
   id: number
   profile_url: string
   ratings: Rating[]
   average_rating: number
   ratings_count: number
   products_count: number
}

export interface Rating extends Base {
   id: number
   shop_id: number
   user_id: number
   rating: number
}