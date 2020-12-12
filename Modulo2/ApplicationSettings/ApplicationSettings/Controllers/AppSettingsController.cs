using Microsoft.AspNetCore.Mvc;
using Microsoft.Extensions.Configuration;

namespace ApplicationSettings.Controllers
{
	[ApiController]
	[Route("[controller]")]
	public class AppSettingsController : ControllerBase
	{
		private readonly IConfiguration Configuration;
		public AppSettingsController(IConfiguration configuration)
		{
			Configuration = configuration;

		}
		[HttpGet]
		public string Get()
		{
			return Configuration["Chave"].ToString();
		}
	}
}
