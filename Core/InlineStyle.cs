using Castle.MicroKernel.Registration;
using Glass.Mapper.Sc.Configuration.Attributes;
using Jet2.Holidays.Web.Core.Models;

namespace Jet2.Holidays.Web.Core
{
    [SitecoreType(AutoMap = true)]
    public class InlineStyle : BaseGlassItem
    {
        public InlineStyle() { }

        public InlineStyle(string property, string value)
        {
            Property = property;
            Value = value;
        }

        public virtual string Property { get; set; }
        public virtual string Value { get; set; }

        public string GetStyleString()
        {
            return string.Format("{0}: {1};", Property, Value);
        }

        public static InlineStyle GetBackgroundImageStyle(string imgUrl)
        {
            return new InlineStyle("background-image", string.Format("url({0})", imgUrl));
        }
    }
}