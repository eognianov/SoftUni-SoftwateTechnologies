﻿using System.ComponentModel.DataAnnotations;
using System.Web.Mvc;

namespace AnimeList.Models
{
    public class Anime
    {
        [Key]
        public int Id { get; set; }

        [Required]
        [MinLength(1)]
        public string Name { get; set; }

        [Required]
        public int Rating { get; set; }

        [Required]
        public string Description { get; set; }

        [Required]
        public string Watched { get; set; }
    }
}