using Glass.Mapper.Sc.Configuration.Attributes;
using Jet2.Holidays.Web.Core.Models;

namespace Jet2.Holidays.Web.Core
{
    [SitecoreType(AutoMap = true)]
    public class NameValuePair : BaseGlassItem
    {
        [SitecoreField("Name")]
        public virtual string Name { get; set; }

        public virtual string Value { get; set; }
    }
}