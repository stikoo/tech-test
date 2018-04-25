using System;
using System.IO;
using Glass.Mapper.Sc.Configuration;
using Glass.Mapper.Sc.Configuration.Attributes;
using Jet2.Holidays.Web.Core.Models;

namespace Jet2.Holidays.Web.Core
{
    public class MediaFile : BaseGlassItem
    {
        [SitecoreField("Blob")]
        public virtual Stream File { get; set; }

        [SitecoreInfo(SitecoreInfoType.MediaUrl)]
        public virtual string MediaUrl { get; set; }

        [SitecoreField("MimeType")]
        public virtual string MimeType { get; set; }

        [SitecoreField("Title")]
        public virtual string Title { get; set; }

        [SitecoreField("Format")]
        public virtual string Format { get; set; }

        [SitecoreField("Description")]
        public virtual string Description { get; set; }

        [SitecoreField("Keywords")]
        public virtual string Keywords { get; set; }

        [SitecoreField("Size")]
        public virtual string Size { get; set; }

        [SitecoreField("Extension")]
        public virtual string Extension { get; set; }

        [SitecoreIgnore]
        public string MediaUrlOrDefault
        {
            get
            {
                var mediaUrl = string.Empty;

                try
                {
                    mediaUrl = MediaUrl;
                }
                catch (Exception ex)
                {
                    //Usually inidcates that a file isn't attached to the item
                }

                return mediaUrl;
            }
        }
    }
}