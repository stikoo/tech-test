using System;
using Glass.Mapper.Sc.Configuration;
using Glass.Mapper.Sc.Configuration.Attributes;

namespace Jet2.Holidays.Web.Core.Models
{
    public interface IGlassItem
    {
        Guid Id { get; set; }

        [SitecoreInfo(SitecoreInfoType.Url)]
        string Url { get; set; }
    }
}